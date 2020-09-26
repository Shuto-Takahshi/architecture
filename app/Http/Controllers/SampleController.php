<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SampleMail;
use Illuminate\Support\Facades\Mail;

class SampleController extends Controller
{
    public function send()
    {

        $to = [
            [
                'email' => 'totalfootball0124@icloud.com',
                'name' => '',
            ]
        ];

        Mail::to($to)->send(new SampleMail());

    }
}
