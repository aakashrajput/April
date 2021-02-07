<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

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
}
