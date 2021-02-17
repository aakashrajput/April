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

        if($seller[0]->user_type == $user_type && $seller[0]->accountstatus == $accountstatus)
        {
            return view('Seller.home');
        } else {
            return redirect()->back();
        }
    }
}
