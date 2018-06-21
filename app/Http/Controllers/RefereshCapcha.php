<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RefereshCapcha extends Controller
{
    public function refereshCapchaS(){
        return captcha_img('flat');
    }
}
