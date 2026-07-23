<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Customer;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class AddressController extends Controller
{
    //
    public function addresses(Request $request)
    {
        if (!Auth::guard('customer')->check()) {
            Alert::toast("Please Login", 'warning');
            return redirect()->route('login');
        }
        $userId = Auth::guard('customer')->id();
        $user = Customer::where('id', $userId)->first();
        $addresses = Address::where('customer_id', $user->id)->get();
        $states = State::all();

        return view('website.addresses', compact('addresses', 'states'));
    }


    public function storeAddress(Request $request)
    {
        // dd($request);
        if (!Auth::guard('customer')->check()) {
            Alert::toast("Please Login", 'warning');
            return redirect()->route('login');
        }
        $userId = Auth::guard('customer')->id();



        // validation
        $request->validate([
            'name' => 'required',
            'gst' => 'nullable',
            'mobile' => 'required',
            'alternate_mobile' => 'nullable',
            'email' => 'required|email',
            'pincode' => 'required',
            'city' => 'required',
            'landmark' => 'nullable',
            'state' => 'required',
            'address' => 'required',
            'address_2' => 'nullable',
        ]);

        // insert into DB
        Address::insert([
            'name' => $request->name,
            'gst' => $request->gst,
            'mobile' => $request->mobile,
            'alternate_mobile' => $request->alternate_mobile,
            'email' => $request->email,
            'pincode' => $request->pincode,
            'city' => $request->city,
            'landmark' => $request->landmark,
            'state' => $request->state,
            'address' => $request->address,
            'address_2' => $request->address_2,
            'customer_id' => $userId,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('/customer/addresses')->with('success', 'Address Added Successfully');
    }
    public function delete($id)
    {
        DB::table('addresses')->where('id', $id)->delete();

        Alert::success('Deleted!', 'Your address has been removed successfully');

        return redirect()->back();
    }

    // Show edit page
    public function addressedit($id)
    {
        $address = Address::findOrFail($id);
        $states = State::get();
        return view('website.addressedit', compact('address', 'states'));
    }

    // Update address
    public function addressupdate(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'mobile' => 'required',
            'alternate_mobile' => 'nullable',
            'email' => 'required|email',
            'pincode' => 'required',
            'city' => 'required',
            'landmark' => 'nullable',
            'state' => 'required',
            'address' => 'nullable',
            'address_2' => 'nullable',
        ]);

        Address::where('id', $id)->update([
            'name' => $request->name,
            'mobile' => $request->mobile,
            'alternate_mobile' => $request->alternate_mobile,
            'email' => $request->email,
            'pincode' => $request->pincode,
            'city' => $request->city,
            'landmark' => $request->landmark,
            'state' => $request->state,
            'address' => $request->address,
            'address_2' => $request->address_2,
            'updated_at' => now(),
        ]);

        return redirect()->route('customer.addresses')->with('success', 'Address Updated Successfully');
    }

    public function customerAddressCreate()
    {
        $states = State::get();
        return view('website.addresscreate', compact('states'));
    }

    public function destroy($id)
    {
        $address = Address::where('id', $id)
            ->where('customer_id', Auth::guard('customer')->id())
            ->firstOrFail();

        $address->delete();

        return redirect()->back()->with('success', 'Address deleted successfully.');
    }


}
