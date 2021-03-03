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


    //Product Approval //

    public function ProductApproveList()
    {
        $status = 'Not Approved';
        $product = DB::select('select * from products where productstatus = ?',[$status]);
        return view('admin.product.alist')->with(compact('product'));
    }

    public function ProductLiveList()
    {
        $status = 'Approved';
        $product = DB::select('select * from products where productstatus = ?',[$status]);
        return view('admin.product.list')->with(compact('product'));
    }

    public function ProductApprove(Request $request, $productid) 
    {
        $accounttype = 'Approved';
        $updated_at = new \DateTime();
        DB::update('update products set productstatus = ?,updated_at=? where productid = ?',[$accounttype,$updated_at,$productid]);
        return redirect('/admin/product/approve')->with('status', 'Product Approved Succesfully');
    }

    public function ProductDelete(Request $request, $productid) 
    {
        DB::delete('delete from products where productid=?',[$productid]);

        return view('Admin.product.alist')->with('status', 'Product Deleted Succesfully');
    }

    public function ProductDetail(Request $request, $productid)
    {
        $product = DB::select('select * from products where productid = ?',[$productid]);
        return view('admin.product.detail')->with(compact('product'));
    }
}
