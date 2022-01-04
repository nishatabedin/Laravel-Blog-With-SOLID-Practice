<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function showAllCategory()
    {
        return view('admin.all_category');
    }

    public function showAddCategoryForm()
    {
        return view('admin.add_category');
    }
}
