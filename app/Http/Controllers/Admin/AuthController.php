<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin;
use App\Models\Seller;
use Carbon\Carbon;
use Validator;
use Alert;
use App\Mail\AdminPasswordResetOtpMail;
use App\Models\Order;
use App\Models\ProductVariant;
use App\Models\Product;
use App\Models\Category;
use App\Models\Customer;
use App\Models\OrderItem;
use App\Models\Payment;
use App\Models\SiteSetting;
use DB;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        $email = Cookie::get('admin_email');
        $password = Cookie::get('admin_password')
            ? Crypt::decryptString(Cookie::get('admin_password'))
            : '';

        return view('admin.auth.login', compact('email', 'password'));
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $remember = $request->has('remember');

        if (Auth::guard('admin')->attempt($credentials, $remember)) {

            if ($remember) {

                Cookie::queue(
                    Cookie::make('admin_email', $request->email, 43200) // 30 days
                );

                Cookie::queue(
                    Cookie::make(
                        'admin_password',
                        Crypt::encryptString($request->password),
                        43200
                    )
                );
            } else {
                Cookie::queue(Cookie::forget('admin_email'));
                Cookie::queue(Cookie::forget('admin_password'));
            }

            return redirect()->route('admin.dashboard');
        }

        return redirect()->back()->withErrors(['Invalid Credentials']);
    }



    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

    public function sellers(Request $request)
    {
        $user = Auth::guard('admin')->user();

        $data = Seller::query();
        if (!empty($request->search)) {
            $data = $data->where(function ($query) use ($request) {

                return $query
                    ->where(function ($query) use ($request) {
                        return $query
                            ->where('name', 'like', '%' . $request->search . '%');
                    })
                    ->orWhere(function ($query) use ($request) {
                        return $query
                            ->where('email', 'like', '%' . $request->search . '%');
                    })
                    ->orWhere(function ($query) use ($request) {
                        return $query
                            ->where('mobile', 'like', '%' . $request->search . '%');
                    });
            });
        }
        $sellers = $data->latest()->paginate(10);
        return view('admin.sellers.all', compact('sellers'));
    }


    public function sellers_store(Request $request)
    {
        $user = Auth::guard('admin')->user();
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:sellers,email|max:255', // Unique check
            'mobile' => 'required|numeric|unique:sellers,mobile', // Unique check
            //   'password' => 'required|min:4|confirmed',
        ];

        // Validate the request
        $validator = Validator::make($request->all(), $rules);
        // Check if validation fails
        if ($validator->fails()) {
            $errorMessages = implode('<br>', $validator->errors()->all());
            Alert::html('Validation Error', $errorMessages, 'error');
            return redirect()->back();
        }
        $seller = new Seller();
        $seller->name = $request->name;
        $seller->mobile = $request->mobile;
        $seller->email = $request->email;
        $seller->address = $request->address;
        $seller->kyc_status = $request->kyc_status;
        $seller->created_at = Carbon::now();
        $seller->save();

        Alert::toast("Seller added Successfully", 'success');
        return redirect(route('admin.sellers'));
    }

    public function showForgotForm()
    {
        return view('admin.auth.forgot-password');
    }
    public function sendOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:admins,email'
        ]);

        $admin = Admin::where('email', $request->email)->first();
        if (!isset($admin->id)) {
            return back()->withErrors(['email' => 'Invalid Email']);
        }
        $otp = 123456;
        // $otp = rand(100000, 999999);

        $admin->otp = $otp;
        $admin->save();

        // Mail::to($request->email)->send(new AdminPasswordResetOtpMail($otp));
        session(['email' => $request->email]);
        return redirect()->route('admin.password.verifyForm')
            ->with('email', $request->email)
            ->with('success', 'OTP sent to your email.');
    }
    public function showVerifyForm()
    {
        if (!session('email')) {
            dd(session('email'));
            return redirect()->route('admin.password.request');
        }

        return view('admin.auth.verify-otp');
    }

    public function verifyOtp(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'otp' => 'required'
        ]);

        $admin = Admin::where('email', $request->email)->first();

        if (!$admin || !$admin->otp) {
            session(['email' => $request->email]);

            return redirect(route('admin.password.verifyForm'))->withErrors(['otp' => 'Invalid OTP']);
        }

        if ($request->otp != $admin->otp) {
            session(['email' => $request->email]);

            return redirect(route('admin.password.verifyForm'))->withErrors(['otp' => 'Invalid OTP']);
        }

        return view('admin.auth.reset-password', [
            'email' => $request->email
        ]);
    }
    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed'
        ]);


        $admin = Admin::where('email', $request->email)->first();

        $admin->password = bcrypt($request->password);
        $admin->otp = null;
        $admin->save();
        session()->forget('email');

        return redirect()->route('admin.login')
            ->with('success', 'Password reset successfully.');
    }

    public function dashboard()
    {
        // site setting for footer
        $site = SiteSetting::first();

        // Orders today count
        $ordersCount = Order::whereDate('created_at', Carbon::today())->count();

        // basic counts
        $counts = [
            'customers' => Customer::count(),
            'suppliers' => 0, // adapt if you have suppliers model
            'orders' => Order::count(),
            'categories' => Category::count(),
            'products' => Product::count(),
        ];

        // Totals placeholders (replace with your actual calculations)
        $totals = [
            'sales' => (float) Order::whereBetween('created_at', [now()->startOfMonth(), now()->endOfMonth()])->sum('grand_total'),
            'sales_change_percent' => 22,
            'sales_return' => 0,
            'purchase' => 0,
            'purchase_return' => 0,
            'profit' => 0,
            'profit_change_percent' => 12,
            'invoice_due' => 0,
            'expense' => 0,
            'payment_returns' => 0,
        ];

        // Low stock variants
        $lowStockThreshold = 10;
        $lowStockProducts = ProductVariant::with('product')
            ->where('stock', '<=', $lowStockThreshold)
            ->orderBy('stock', 'asc')
            ->take(6)
            ->get()
            ->map(function ($v) {
                return (object) [
                    'product_id' => $v->product_id,
                    'title' => $v->product?->title,
                    'image' => $v->image,
                    'sku' => $v->sku,
                    'stock' => $v->stock,
                    'id' => $v->id,
                ];
            });

        $lowStockAlert = $lowStockProducts->first();

        // $topSelling = collect(); 
        $topSelling = OrderItem::selectRaw('product_variant_id,product_title,unit_price,SUM(quantity) as total_quantity,SUM(subtotal) as total_price')
            ->groupBy('product_variant_id', 'product_title', 'unit_price')
            ->orderByDesc('total_quantity')
            ->take(6)
            ->get();
        // Recent sales (last 6 orders)
        $recentSales = Order::with('user')
            ->latest()
            ->take(6)
            ->get()
            ->map(function ($o) {
                return (object) [
                    'id' => $o->id,
                    'customer_name' => $o->user?->name ?? 'Guest',
                    'customer_avatar' => $o->user?->avatar ?? null,
                    'grand_total' => $o->grand_total,
                    'status' => $o->status,
                    'created_at' => $o->created_at,
                ];
            });

        // Top categories
        $topCategories = Category::withCount('products')->orderByDesc('products_count')->take(6)->get();

        // chart summary placeholder
        $chartSummary = [
            'purchase_count' => 3000,
            'sales_count' => 1000,
        ];

        // customers overview placeholder
        $customersOverview = [
            'first_time' => 5500,
            'first_time_change' => '+25%',
            'returning' => 3500,
            'returning_change' => '+21%',
        ];

        $topCustomers = DB::table('customers')
            ->select(
                'customers.id',
                'customers.name',
                'customers.email',
                'customers.profile_pic as avatar',
                // 'customers.country',
                DB::raw('(select count(*) from `orders` where `customers`.`id` = `orders`.`customer_id`) as orders_count'),
                DB::raw('(select sum(`orders`.`grand_total`) from `orders` where `customers`.`id` = `orders`.`customer_id`) as orders_sum_grand_total')
            )
            ->whereNull('customers.deleted_at')
            ->orderByDesc('orders_count')
            ->limit(5)
            ->get();
        $today = Carbon::today();

        // Today's Sales
        $todayOrders = Order::whereDate('created_at', $today)
            ->latest()
            ->take(5)
            ->get();

        // Today's Transactions
        $todayTransactions = Payment::whereDate('created_at', $today)->where('status', 'paid')
            ->latest()
            ->take(5)
            ->get();

        $pendingJobs = DB::table('jobs')->count();


        // Prepare compact variables for the view
        return view('admin.auth.dashboard', [
            'site' => $site,
            'ordersCount' => $ordersCount,
            'counts' => $counts,
            'totals' => $totals,
            'lowStockProducts' => $lowStockProducts,
            'lowStockAlert' => $lowStockAlert,
            'lowStockThreshold' => $lowStockThreshold,
            'topSelling' => $topSelling,
            'recentSales' => $recentSales,
            'topCategories' => $topCategories,
            'chartSummary' => $chartSummary,
            'customersOverview' => $customersOverview,
            'topCustomers' => $topCustomers,
            'todayOrders' => $todayOrders,
            'todayTransactions' => $todayTransactions,
            'pendingJobs' => $pendingJobs
        ]);
    }
}
