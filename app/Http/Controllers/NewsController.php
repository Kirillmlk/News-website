<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show_news($id)
    {

        $news = Contact::findOrFail($id);


        return view('news.show', compact('news'));
        //
    }
}
