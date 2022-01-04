<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function showAllPost()
    {
        return view('admin.all_post');
    }

    public function showAddPostForm()
    {
        return view('admin.add_post');
    }
}
