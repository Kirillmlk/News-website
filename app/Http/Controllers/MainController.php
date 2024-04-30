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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // валидация изображения
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName(); // генерация уникального имени для изображения
            $image->storeAs('public/images', $imageName); // сохранение изображения на сервере

            // Создание новости с данными именем изображения
            $createNews = new Contact();
            $createNews->email = $request->input('email');
            $createNews->subject = $request->input('subject');
            $createNews->message = $request->input('message');
            $createNews->image = $imageName; // сохранение имени изображения в базе данных
            $createNews->save();
        }

        return redirect()->route('create');
    }
}
