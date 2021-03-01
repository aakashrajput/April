<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;

class SellerController extends Controller
{
    public function home()
    {
        $seller_email = Auth::user()->email;
        $user_type ="Seller";
        $accountstatus = "Not Approved";
        $seller = DB::select('select * from users where email = ?',[$seller_email]);
        $sellerD = DB::select('select * from sellers where email = ?',[$seller_email]);
        if($seller[0]->user_type == $user_type && $seller[0]->accountstatus == "Approved")
        {
            return view('Seller.dashboard');

        } else {
            if($seller[0]->user_type == $user_type && $seller[0]->accountstatus == $accountstatus)
        {
            if($sellerD)
            {
                    if($sellerD[0]->email &&  $sellerD[0]->phone1 &&  $sellerD[0]->adharCard &&  $sellerD[0]->productCat &&  $sellerD[0]->address)
                {
                    $note = 'Data Updated';
                    return view('Seller.home')->with(compact('note'));
                } 
            } 
            else 
            {
                return view('Seller.home');
            }
            
        } else {
            return redirect()->back();
        }
        }
    }


    public function SaveSeller(Request $request)
    {
        $username = $request->input('username');
        $email = Auth::user()->email;
        $fullname = $request->input('fullname');
        $productCat = $request->input('productCat');
        $phone1 = $request->input('phone1');
        $phone2 = $request->input('phone2');
        $address = $request->input('address');
        $pincode = $request->input('pincode');
        $landmark = $request->input('landmark');
        $city = $request->input('city');
        $adharCard = $request->input('adharCard');
        $panCard = $request->input('panCard');
        $voterid = $request->input('voterid');
        $drivingLicense = $request->input('drivingLicense');
        //$docfront = 'test';
        //$docback = $request->input('docback');
        //$pandoc = $request->input('pandoc');
        $created_at = new \DateTime();
        $updated_at = new \DateTime();

        $this->validate($request, [
            'docfront' => 'required|file|mimes:jpeg,png,pdf,doc,docx,jpg|max:2048',
        ]);
    
        if ($request->hasFile('docfront')) {
            $image = $request->file('docfront');
            $docfront = time().'-AdharFront'.'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/DigitalLibrary');
            $image->move($destinationPath, $docfront);
        }

        $this->validate($request, [
            'docback' => 'required|file|mimes:jpeg,png,pdf,doc,docx,jpg|max:2048',
        ]);
    
        if ($request->hasFile('docback')) {
            $image2 = $request->file('docback');
            $docback = time().'-AdharBack'.'.'.$image2->getClientOriginalExtension();
            $destinationPath = public_path('/DigitalLibrary');
            $image2->move($destinationPath, $docback);
        }

        $this->validate($request, [
            'pandoc' => 'required|file|mimes:jpeg,png,pdf,doc,docx,jpg|max:2048',
        ]);
    
        if ($request->hasFile('pandoc')) {
            $image3 = $request->file('pandoc');
            $pandoc = time().'-PanCard'.'.'.$image3->getClientOriginalExtension();
            $destinationPath = public_path('/DigitalLibrary');
            $image3->move($destinationPath, $pandoc);
        }
        

        $data=array('email'=>$email,'username'=>$username, 'fullname'=>$fullname,'productCat'=>$productCat, 'phone1'=>$phone1, 'phone2'=>$phone2, 'address'=>$address, 'pincode'=>$pincode, 'city'=>$city, 'landmark'=>$landmark, 'adharCard'=>$adharCard, 'PanCard'=>$adharCard, 'VoterID'=>$voterid, 'drivingLicence' =>$drivingLicense, 'adharfront' =>$docfront, 'adharback' =>$docback, 'pancarddoc' =>$pandoc, 'created_at'=>$created_at, 'updated_at'=>$updated_at);
        DB::table('sellers')->insert($data);
        
       return redirect()->back()->with('status', 'Details Updated');

        
    }
}
