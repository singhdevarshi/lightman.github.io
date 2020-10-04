<?php

namespace App\Http\Controllers\Vendor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Vendor;

class VDashboardController extends Controller
{
    public function vendor()
    {
        return view('vendorMaster.v_dashboard');
    }
    public function vdetail()
    {
        return view('vendorMaster.vendor_detail');
    }
    public function store(Request $request)
    {
         //handle file upload
         if($request->hasFile('id-proof-image')){
            // Get filename with the extension
            $filenameWithExt = $request->file('id-proof-image')->getClientOriginalName ();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('id-proof-image')->getClientOriginalExtension();
            // File name to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload the image
            $path = $request->file('id-proof-image')->storeAs('public/vendor/id_proof_images', $fileNameToStore);
        } else{
            $fileNameToStore = 'noimage.jpg';
        }

        $vendors = new Vendor;
        $vendors->name = $request->input('fullname');
        $vendors->username = $request->input('username');
        $vendors->gender = $request->input('gender');
        $vendors->email = $request->input('email');
        $vendors->vendor_type = $request->input('vendortype');
        $vendors->address1 = $request->input('address');
        $vendors->address2 = $request->input('address2');
        $vendors->state = $request->input('state');
        $vendors->city = $request->input('city');
        $vendors->zip = $request->input('zip');
        $vendors->id_proof_type = $request->input('id-proof-type');
        $vendors->id_proof_no = $request->input('id-proof-no');
        $vendors->id_proof_image = $fileNameToStore;

        $vendors->save();
        return redirect('/vendorMaster.v_dashboard')->with('status', 'Data Added for About Us');
    }
    public function show(){
        $vendor_id = auth()->user()->v_id;
        $vendors = Vendor::find($vendor_id);
        return view('vendorMaster.vendor_profile')->with('vendors', $vendors);
    }
}
