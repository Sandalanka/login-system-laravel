<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class UserController extends Controller
{
    public function register(Request $request){
$this->validate($request,[
    'email'=>'required|email|unique:users'

]);
        $table=new User();
      $table->fname=  $request->input('fname');
      $table->lname=   $request->input('lname');
      $table->email=  $request->input('email');
      $table->password= bcrypt( $request->input('password'));
      $table->save();
      return redirect()->back();
    }

    public function login(Request $request){
        $data=$request->only('email','password');
      if(Auth::attempt($data)){
         return redirect()->route('home');//homepage
      }
      return redirect()->back();
    }

    public function home(){
        return view('home');
    }
    public function logout(){
        Auth::logout();
        Session::flush();
        return redirect('/');
    }
}
