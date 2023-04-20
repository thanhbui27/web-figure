<?php

namespace App\Http\Controllers;

use App\Mail\HelpMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailController extends Controller
{
    public function sendEmail(Request $request){
        $details = [
            'name' => $request -> name,
            'email' => $request -> email,
            'title' => $request -> title,
            'content' => $request -> content
        ];
        Mail::to('bthanh2001@gmail.com')->send(new HelpMail($details));
        $content = 'Gửi mail thành công vui lòng bấm vào <a href="home" > đây </a> để quay trở lại ';
        return $content;
    }
}
