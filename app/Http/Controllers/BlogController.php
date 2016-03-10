<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\BlogPost;
use App\BlogCategory;

use Illuminate\Support\Facades\Auth;
use Request;


class BlogController extends Controller {

	public function index(){
        $posts = BlogPost::latest('published')->get();

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
        $data['blog_categories'] = $this->get_blog_categories_list();
        $data['post'] = $post;

        return view('blog/edit', $data);
    }

    public function create(){
        $data['blog_categories'] = $this->get_blog_categories_list();
        return view('blog/create', $data);
    }

    public function save(){
        $input = Request::all();

        $user = Auth::user();

        $post = new BlogPost();
        $post->title = $input['title'];
        $post->body = $input['body'];
        $post->summary = $input['summary'];
        $post->slug = str_slug($input['title'], '-');
        $post->blog_category_id = $input['blog_category_id'];
        $post->author = $user['name'];
        $post->save();

        return redirect('blog');

    }

    public function update($id){
        $input = Request::all();

        $update_post = array(
            'title'=>$input['title'],
            'body'=>$input['body'],
            'summary'=>$input['summary'],
            'blog_category_id'=>$input['blog_category_id'],
        );

        $update = BlogPost::find($id)->update($update_post);
        $data['updated'] = $update;

        return redirect('blog');

    }

    public function get_blog_categories_list(){
        $categories = BlogCategory::lists('blog_category','id');

        return $categories;
    }
}
