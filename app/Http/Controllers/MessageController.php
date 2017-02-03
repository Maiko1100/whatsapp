<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use WhatsProt;
use Registration;

class MessageController extends Controller
{
    function __construct()
    {


        $username = '31646595223';    // Your number with country code, ie: 34123456789
        $nickname = 'Maiko';    // Your nickname, it will appear in push notifications
        $debug = true;  // Shows debug log, this is set to false if not specified
        $log = true;  // Enables log file, this is set to false if not specified
        $method = 'sms';
        $carrier = 31;

        $w = new WhatsProt($username, $nickname, $debug, $log);

        $r = new Registration($username, $debug);

        $r->codeRequest($method, $carrier);


    }


   public function Test(){

       return view('test');
    }

}
