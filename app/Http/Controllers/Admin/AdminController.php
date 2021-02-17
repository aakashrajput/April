<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB; 

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth:web');
    }

    public function home()
    {
        return view('Admin.home');
    }

    public function SellerList()
    {
        $user_type ="Seller";
        $accountstatus = "Not Approved";
        $seller = DB::select('select * from users where user_type = ? AND accountstatus = ?',[$user_type, $accountstatus]);
        return view('Admin.Seller.SellerList')->with(compact('seller'));
    }
}
