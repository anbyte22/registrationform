<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }
    public function payment()
    {
        return view('frontend.paytype');
    }
}