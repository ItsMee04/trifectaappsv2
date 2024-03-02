<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfessionController extends Controller
{
    public function index()
    {
        return view('admin.profession');
    }

    public function professionPost()
    {
        return view('admin.post.profession-post');
    }
}
