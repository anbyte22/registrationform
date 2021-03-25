<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TempRegistration;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }
    public function register(Request $request){
        //dd(implode($request->interest, '+'));
        $this->validate($request,[
            'mobile'=>'required|unique:temp_registrations|max:12|min:10',
        ]);
        $user=new TempRegistration;
        $user->name=$request->name;
        $user->company=$request->company;
        $user->job=$request->job;
        $user->address=$request->address;
        $user->city=$request->city;
        $user->pin=$request->pin;
        $user->state=$request->state;
        $user->country=$request->country;
        $user->tel=$request->tel;
        $user->fax=$request->fax;
        $user->mobile=$request->mobile;
        $user->email=$request->email;
        $user->website=$request->website;
        $user->activity=implode($request->business, '+');
        $user->interest=implode($request->interest, '+');
        $user->about=implode($request->aboutaahar, '+');
        $user->turnover=$request->annualturnover;
        if($user->save()){
           return redirect('/');
        }
        //dd($user->all());
    }
}
