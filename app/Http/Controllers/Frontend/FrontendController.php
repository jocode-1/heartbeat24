<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){

        return view('frontend.index');
    }

    public function viewCategoryPost($category_slug) {

        $category = Category::where('slug', $category_slug)->where('status', '0')->first();

        if($category) {
            $post = Post::where('category_id', $category->id)->where('status', '0')->paginate(10);
        return view('frontend.post.index', compact('post', 'category'));


        } else {

            return redirect('/');
        }
    }

    public function viewPost(string $category_slug, string $post_slug) {

        $category = Category::where('slug', $category_slug)->where('status', '0')->first();

        if($category) {
            $post = Post::where('category_id', $category->id)->where('slug', $post_slug)->where('status', '0')->first();
            $latest_posts = Post::where('category_id', $category->id)->where('status', '0')->orderBy('created_at', 'DESC')->get()->take(10);
        return view('frontend.post.view', compact('post', 'latest_posts'));


        } else {

            return redirect('/');
        }

    }
}
