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

    public function SellerTotalList()
    {
        $user_type ="Seller";
        $accountstatus = "Approved";
        $seller = DB::select('select * from users where user_type = ? AND accountstatus = ?',[$user_type, $accountstatus]);
        return view('Admin.Seller.List')->with(compact('seller'));
    }

    public function deleteSeller(Request $request, $email) 
    {
        $seller = DB::select('select * from users where email = ?',[$email]);
        $semail = $seller[0]->email;
        DB::delete('delete from users where email = ?',[$email]);
        DB::delete('delete from sellers where email=?',[$semail]);

        return view('Admin.Seller.List')->with('status', 'Seller Account Deleted Succesfully');
    }

    public function approveSeller(Request $request, $email) 
    {
        $accounttype = 'Approved';
        $updated_at = new \DateTime();
        DB::update('update users set accountstatus = ?,updated_at=? where email = ?',[$accounttype,$updated_at,$email]);
        return redirect('/seller-list')->with('status', 'Seller Account Approved Succesfully');
    }

    public function SellerDetails(Request $request , $email)
    {
        $data = DB::select('select * from sellers where email = ?',[$email]);
        $data2 = DB::select('select * from users where email = ?',[$email]);
        return view('admin.seller.SellerDetails')->with(compact('data','data2')); 
    }
}
