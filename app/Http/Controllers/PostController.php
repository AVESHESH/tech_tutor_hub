<?php

namespace App\Http\Controllers;

use App\Models\PostCategory;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $category=PostCategory::latest()->get();
        return view('admin.post',compact('category'));
    }
}
