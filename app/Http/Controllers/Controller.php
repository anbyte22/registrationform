<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\User;
use Hash;
use Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function loginForm(){
        $user=User::count();
        return view('backend.login',['totaladmin'=>$user]);
    }
    public function reg(){
        $user=User::count();
        if($user==0){

            return view('backend.register');
        }else{
            return redirect('admin');
        }
    }
    public function regForm(Request $request){

        $var=$request->input();
        $request->validate([
            'name'=>'required | min:4 | max:50',
            'username'=>'required | email',
            'password'=>'required |confirmed | min:4 | max:15'
        ]);


        $user= new user;
        $user->name=$var['name'];
        $user->email=$var['username'];
        $user->password=Hash::make($var['password']);
        $check= $user->save();
        if($check){

          alert('Success', 'Password changed Successfully', 'success');
          return redirect('admin')->with('data','*Register succesfuly');

        }
    }
    public function loginValidation(Request $request){
        $request->validate([
            'email'=>'required | email',
            'password'=>'required | min:4 | max:15',
        ]);
        $data=$request->input();
        if (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
            return redirect('admin/dashboard');
        }else{

           return redirect('admin')->with('error','Incorrect Email or Password. Please enter valid details.');
        }
    }
    public function dash(){
        return view('backend.dashboard',['active'=>'Dashboard']);
    }
}

