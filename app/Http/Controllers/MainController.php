<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use JetBrains\PhpStorm\NoReturn;

class MainController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }

    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    public function add_news()
    {
        return view('addnews');
    }

    public function create_check(Request $request)
    {
        $valid = $request->validate([
            'email' => 'required|min:5|max:100',
            'subject' => 'required|min:5|max:100',
            'message' => 'required|min:20|max:500',
        ]);

        $createNews = new Contact();
        $createNews->email = $request->input('email');
        $createNews->subject = $request->input('subject');
        $createNews->message = $request->input('message');

        $createNews->save();

        return redirect()->route('create');
    }
}
