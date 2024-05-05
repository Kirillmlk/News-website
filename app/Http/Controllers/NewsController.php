<?php

namespace App\Http\Controllers;

use App\Models\Contact; // Импортируем модель Contact
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function show_news($id)
    {
        // Получаем новость из базы данных по идентификатору
        $news = Contact::findOrFail($id);

        // Возвращаем представление с полной новостью
        return view('news.show', compact('news'));
    }
}
