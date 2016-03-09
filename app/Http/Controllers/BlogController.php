<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\BlogPost;

use Illuminate\Http\Request;

class BlogController extends Controller {

	public function index(){
        $posts = BlogPost::all();

        $data['posts'] = $posts;
        return view('blog/index', $data);
    }


    public function show($slug){
        $post = BlogPost::where('slug', $slug)->first();
        $data['post'] = $post;

        return view('blog/show', $data);
    }

    public function edit($id){
        $post = BlogPost::where('id', $id)->first();
        $data['post'] = $post;

        return view('blog/edit', $data);
    }

    public function create(){

        return view('blog/create');
    }
}
