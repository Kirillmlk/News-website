<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;

class MainController extends Controller
{
    public function welcome()
    {
        $news = new Contact();
        return view('welcome', ['news' => $news->all()]);
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }


}
