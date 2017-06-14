<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;


class UsersController extends Controller
{
    public function signUp(Request $request)
    {
        $this->validate($request, [
            'name'=>'required|max:20',
            'email'=>'required|email',
            'password'=>'required|min:4',

        ]);

        $name = $request['name'];
        $email =$request['email'];
        $password = bcrypt($request['password']);

        $user = new User;
        $user->name = $name;
        $user->email = $email;
        $user->password = $password;
        $user->save();

        Auth::login($user);

        return redirect()->route('welcome');
    }

    public function signIn(Request $request)
    {
        $this->validate($request, [
            'email'=>'required',
            'password'=>'required',

        ]);

        if (Auth::attempt(['email'=>$request['email'], 'password'=>$request['password']]))
        {
            return redirect()->route('welcome');
        }
        else
        {
            return redirect()->back();
        }
    }

    public function logOut()
    {
        Auth::logout();

        return redirect()->route('welcome');
    }

    public function shoppingCart()
    {
      return view('shopping_cart');
    }

    public function adminAuth(Request $request)
    {
       $admin_name = 'admin';
       $admin_password = 'root';

       if ($request['admin_name'] == $admin_name && $request['admin_password'] == $admin_password)
       {
           $request->session()->put('admin_name', 'admin_name');
           $request->session()->put('admin_password', 'admin_password');
           return redirect()->route('admin_panel');
       }
       else
       {
           return redirect()->back();
       }
    }
}
