<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Customer;
use App\Services\WhatsAppService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert;

class AccountController extends Controller
{
    //
    public function login()
    {
        return view('website.login');
    }
    public function logout()
    {
        Auth::guard('customer')->logout();

        Alert::toast('Logout Successfully', 'success');

        return redirect()->route('login');
    }

    public function sendOtp(Request $request)
    {
        $request->validate([
            'mobile' => 'required'
        ]);

        // Default OTP
        $otp = 1234;

        $user = Customer::where('mobile', $request->mobile)->first();

        if ($user) {
            $user->otp = $otp;
            $user->save();
        } else {
            $user = new Customer();
            $user->mobile = $request->mobile;
            $user->otp = $otp;
            $user->save();
        }

        return response()->json([
            'status' => true,
            'message' => 'OTP sent successfully',
            'otp' => $otp 
        ]);
    }

    // 2. VERIFY OTP
    public function verifyOtp(Request $request)
    {
        $request->validate([
            'mobile' => 'required',
            'otp' => 'required'
        ]);

        $user = Customer::where('mobile', $request->mobile)->first();

        if (!$user) {
            return response()->json(['status' => false, 'message' => 'Customer not found']);
        }

        if ($user->otp !== $request->otp) {
            return response()->json(['status' => false, 'message' => 'Invalid OTP']);
        }

        // LOGIN USER
        Auth::guard('customer')->login($user);
        // clear OTP
        $user->update([
            'otp' => null,
        ]);

        return response()->json([
            'status' => true,
            'message' => 'Login successful'
        ]);
    }

    private function sendWhatsAppMessage($cust_mobile, $templateName, array $fields = [])
    {

        $data = [
            "from_phone_number_id" => "1039154362623617",
            "phone_number" => '91' . $cust_mobile,
            "template_name" => $templateName,
            "template_language" => "en_Us",
            "header_image" => "https://cdn.pixabay.com/photo/2015/01/07/15/51/woman-591576_1280.jpg",
            "header_video" => "http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerEscapes.mp4",
            "header_document" => "http://commondatastorage.googleapis.com/gtv-videos-bucket/sample/ForBiggerEscapes.mp4",
            "header_document_name" => "",
            "header_field_1" => "{full_name}",
            "location_latitude" => "",
            "location_longitude" => "",
            "location_name" => "",
            "location_address" => "",
            "field_1" => $fields['field_1'] ?? '',
            "field_2" => $fields['field_2'] ?? '',
            "field_3" => $fields['field_3'] ?? '',
            "field_4" => $fields['field_4'] ?? '',
            "field_5" => $fields['field_5'] ?? '',
            "button_0" => $fields['field_1'],
            "button_1" => "{phone_number}",
            "copy_code" => $fields['field_1'],
        ];

        return $data;
    }

    public function account()
    {
        $customer = Auth::guard('customer')->user();

        $defaultAddress = Address::where('customer_id', $customer->id)
            ->latest()
            ->first(); // or ->where('is_default',1)->first()

        return view('website.account', compact('customer', 'defaultAddress'));
    }
}
