<?php

namespace App\Http\Controllers;

use App\Mail\MailBDE;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailBDEController extends Controller
{
    //
    public function index()
    {
        $mailData = [
            'title' => 'Mail from BDESite',
            'body' => 'This is for testing email using smtp.'
        ];

        Mail::to('akwamou@gmail.com')->send(new MailBDE($mailData));

        dd("Email is sent successfully.");
    }

    public function send(Request $request)
    {
        $mailData = [
            'title' => 'Mail from BDESite',
            'body' => $request->input('text')
        ];

        Mail::to('akwamou@gmail.com')->send(new MailBDE($mailData));

        dd("Email is sent successfully.");
    }
}
