<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App;
use DB;
use App\Models\User;


class MainController extends Controller
{
    //

    public function loginPage()
    {
        return view('login');
    }

    public function Mainlogin(Request $request)
    {
      // Validate the form data
      $this->validate($request, [
        'email'   => 'required|email',
        'password' => 'required|min:6'
      ]);

      // Attempt to log the user in
      if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password, 'user_type' => 'seller'], $request->remember)) {
        return redirect('/seller/home');
      }elseif (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password, 'user_type' => 'buyer'], $request->remember)) {
        return redirect('/buyer/home');
      } elseif (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password, 'user_type' => 'admin'], $request->remember)) {
        return redirect('/admin/home');
      } else {
        // if unsuccessful, then redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('email', 'remember'))->withErrors(['Email/Password is Incorrect, Please Check Your Login Details and Try Again']);
             }
      }

      public function SellerRegister(Request $request)
      {
          App::setlocale('in');
          return view('SellerRegister');
       
      }

      public function SellerRegisterSubmit(Request $request)
    {

        $this->validate(request(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

       
        $email = $request->input('email');
        $name = $request->input('name');
        $user_type="Seller";
        $accounttype = 'Not Approved';
        
        User::create(request(['name', 'email', 'password', 'user_type']));
        DB::update('update users set accountstatus = ? where email = ?',[$accounttype, $email]);



        //Mail::to($email)->send(new EmployeeReg());
        //$dat = new EmployeeReg(); // sendgrid_api
        //$dat->send($request);
        return view('seller.home');

    }

      public function logout()
      {
          Auth::guard('web')->logout();
          return redirect('/');
      }
}
