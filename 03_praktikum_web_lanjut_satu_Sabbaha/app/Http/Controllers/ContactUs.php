<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUs extends Controller
{
    public function index(){
        return view('contact', [
            'insta' => url('https://www.instagram.com/_.zen._20/?hl=id'),
            'mail' => 'bahajazz70@gmail.com',
            'git' => 'Maisho20'
        ]);
    }
}
