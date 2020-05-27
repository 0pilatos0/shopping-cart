<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests;
use Auth;
use Session;


class UserController extends Controller
{
    public function getSignup(){
        return view('user.signup');
    }
    public function postSignup(Request $request){
        $this->validate($request, [
            'email' => 'email|required|unique:users',
            'password' => 'required|min:4'
        ]);
        $user = new User([
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password'))
        ]);
        $user->save();
        Auth::login($user);
        if (Session::has('oldURL')){
            $oldURL = Session::get('oldURL');
            Session::forget('oldURL');
            return redirect()->to($oldURL);
        }
        return redirect()->route('product.index');
    }
    public function getSignin(){
        return view('user.signin');
    }
    public function postSignin(Request $request){
        $this->validate($request, [
            'email' => 'email|required',
            'password' => 'required|min:4'
        ]);

        if (Auth::attempt(['email' => $request->input('email'), 'password' => $request->input('password')])){
            if (Session::has('oldURL')){
                $oldURL = Session::get('oldURL');
                Session::forget('oldURL');
                return redirect()->to($oldURL);
            }
            return redirect()->route('user.profile');
        } 
        return redirect()->route('user.signin');
    }
    public function getProfile(){
        $orders = Auth::user()->orders;
        $orders->transform(function($order, $key){
            $order->cart = unserialize($order->cart);
            return $order;
        });
        return view('user.profile', ['orders' => $orders]);
    }
    public function getLogout(){
        Auth::logout();
        return redirect()->route('product.index');
    }
}
