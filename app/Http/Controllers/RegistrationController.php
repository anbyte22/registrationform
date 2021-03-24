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
        //dd($request->all());
        $this->validate($request,[
            'mobile'=>'required|unique:temp_registrations'
        ]);
    }
}
