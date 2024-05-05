<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class FormController extends Controller
{
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->storeAs('public/images', $imageName);

            // Создание новости с данными именем изображения
            $createNews = new Contact();
            $createNews->email = $request->input('email');
            $createNews->subject = $request->input('subject');
            $createNews->message = $request->input('message');
            $createNews->image = $imageName;
            $createNews->save();
        }

        return redirect()->route('create');
    }
}
