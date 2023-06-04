<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function addDoc()
    {
        return view('admin.add_doctor');
    }

    public function addNews()
    {
        return view('admin.add_news');
    }

    public function addEvents()
    {
        return view('admin.add_event');
    }
}
