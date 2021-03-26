<?php

namespace App\Http\Controllers;

use App\Models\Registration;
use App\Models\TempRegistration;
use Illuminate\Http\Request;
use QrCode;

class RegistrationController extends Controller
{
    public function index()
    {
        return view('frontend.home');
    }
    public function payment($id)
    {
        return view('frontend.paytype', ['id' => $id]);
    }

    public function register(Request $request)
    {
        //dd(implode($request->interest, '+'));
        $this->validate($request, [
            'mobile' => 'required|unique:temp_registrations|max:12|min:10',
            'pin'=>'required|min:6',
            'business'=>'required',
            'interest'=>'required',
            'aboutaahar'=>'required',
            'annualturnover'=>'required',
        ]);
        $user = new TempRegistration;
        $user->name = $request->name;
        $user->company = $request->company;
        $user->job = $request->job;
        $user->address = $request->address;
        $user->city = $request->city;
        $user->pin = $request->pin;
        $user->state = $request->state;
        $user->country = $request->country;
        $user->tel = $request->tel;
        $user->fax = $request->fax;
        $user->mobile = $request->mobile;
        $user->email = $request->email;
        $user->website = $request->website;
        $user->activity = implode($request->business, '+');
        $user->interest = implode($request->interest, '+');
        $user->about = implode($request->aboutaahar, '+');
        $user->turnover = $request->annualturnover;
        $user->save();
        return redirect('payment/' . $user->id);

    }
    public function paynow(Request $request)
    {
        $rid = $request->rowid;
        $paymode = $request->payment;
        $tempUser = TempRegistration::where('id', $rid)->first();
        $chkrid = Registration::where('paymode', $paymode)->orderBy('id', 'desc')->first();
        if ($paymode == "Pay Online") {
            if ($chkrid) {
                $olduid = $chkrid->reg_no;
                $firstpick = substr($olduid, 0, 4);
                $lastpick = substr($olduid, 4);
                $num = $lastpick + 1;
                $last = sprintf("%05s", $num);
                $regisid = $firstpick . $last;
            } else {
                $regisid = "AAVP00001";
            }
            $trnid = 145236;
        } else {
            if ($chkrid) {
                $olduid = $chkrid->reg_no;
                $firstpick = substr($olduid, 0, 3);
                $lastpick = substr($olduid, 3);
                $num = $lastpick + 1;
                $last = sprintf("%05s", $num);
                $regisid = $firstpick . $last;
            } else {
                $regisid = "VPC00001";
            }
            $trnid = $request->coupon;

        }
        $user = new Registration();
        // dd('yes');
        // $image=QrCode::size(300)->format('png')->generate($regisid.' '.$tempUser->name.' '.$tempUser->company.' '.$tempUser->job.' '.$tempUser->address.' '.$tempUser->city.' '.$tempUser->pin.' '.$tempUser->state.' '.$tempUser->country.' '.$tempUser->mobile.' '.$tempUser->email.' '.$tempUser->website);
        $image = \QrCode::format('png')
                 ->merge('img/t.jpg', 0.1, true)
                 ->size(200)->errorCorrection('H')
                 ->generate($regisid.' '.$tempUser->name.' '.$tempUser->company.' '.$tempUser->job.' '.$tempUser->address.' '.$tempUser->city.' '.$tempUser->pin.' '.$tempUser->state.' '.$tempUser->country.' '.$tempUser->mobile.' '.$tempUser->email.' '.$tempUser->website);
        $output_file = '/img/qr-code/img-' . time() . '.png';
        Storage::disk('local')->put($output_file, $image);
       // exit;
        $user->reg_no = $regisid;
        $user->name = $tempUser->name;
        $user->company = $tempUser->company;
        $user->job = $tempUser->job;
        $user->address = $tempUser->address;
        $user->city = $tempUser->city;
        $user->pin = $tempUser->pin;
        $user->state = $tempUser->state;
        $user->country = $tempUser->country;
        $user->tel = $tempUser->tel;
        $user->fax = $tempUser->fax;
        $user->mobile = $tempUser->mobile;
        $user->email = $tempUser->email;
        $user->website = $tempUser->website;
        $user->activity = $tempUser->activity;
        $user->interest = $tempUser->interest;
        $user->about = $tempUser->about;
        $user->turnover = $tempUser->turnover;
        $user->paymode = $paymode;
        $user->transaction_id = $trnid;
        $user->save();
        return view('frontend.success', ['regisid' => $user->reg_no]);
    }
}
