<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\PostFormRequest;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index(){

        return view('admin.post.index');
    }

    public function create() {

        $category = Category::where('status', '0')->get();
        return view('admin.post.create', compact('category'));
    }

    public function store(PostFormRequest $request) {

    }
    
}
