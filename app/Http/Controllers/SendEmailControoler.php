<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyTestMail;


class SendEmailControoler extends Controller
{
    // public function sendEmail()
    // {
    //     $details = [
    //         'title' => 'Testing Emal From Sacode',
    //         'body' => 'This is for testing email gmail.'
    //     ];

    //     Mail::to("sacodepapua01@gmail.com")->send(new MyTestMail($details));
    //     return "Email Send";
    // }


    public function index(){
        return view('email.formmail');
    }
    public function posts(Request $request){
        try{
            Mail::send('email.isiemail', array('pesan' => $request->pesan) , function($pesan) use($request){
                $pesan->to($request->penerima,'Verifikasi')->subject('Verifikasi Email');
                $pesan->from(env('MAIL_USERNAME','sacodepapua01@gmail.com'),'Verifikasi Akun email anda');
            });
        }catch (\Throwable $e){
            return response (['status' => false,'errors' => $e->getMessage()]);
        }
    }

}
