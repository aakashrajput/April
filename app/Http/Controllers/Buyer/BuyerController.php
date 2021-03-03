<?php

namespace App\Http\Controllers\Buyer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;

class BuyerController extends Controller
{
    public function home()
    {
        $buyer_email = Auth::user()->email;
        $user_type ="Buyer";
        $accountstatus = "Approved";
        $buyer = DB::select('select * from users where email = ?',[$buyer_email]);
        $products = DB::select('select * from products where productstatus = ?',[$accountstatus]);
        return view('Buyer.home')->with(compact('products'));
            
    }
}
