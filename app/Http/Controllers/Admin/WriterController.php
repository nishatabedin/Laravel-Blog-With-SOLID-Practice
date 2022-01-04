<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WriterController extends Controller
{
    public function showAllWriter()
    {
        return view('admin.all_writer');
    }

    public function showAddWriterForm()
    {
        return view('admin.add_writer');
    }
}
