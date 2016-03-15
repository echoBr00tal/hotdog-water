<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\BlogPost;
use App\BlogCategory;
use App\Http\Requests\BlogRequest;
use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;
use Request;


class BlogController extends Controller {

    /**
     * @return \Illuminate\View\View
     */
    public function index(){
        $dt = Carbon::now();
        $published_lookup = $dt->toDateString();

        $posts = BlogPost::where('published', '<=', $published_lookup)->orderBy('published', 'DESC')->get();

        $data['posts'] = $posts;
        return view('blog/index', $data);
    }


    /**
     * @param $slug
     * @return \Illuminate\View\View
     */
    public function show($slug){
        $post = BlogPost::where('slug', $slug)->firstOrFail();
        $data['post'] = $post;

        return view('blog/show', $data);
    }

    /**
     * @param $id
     * @return \Illuminate\View\View
     */
    public function edit($id){
        $post = BlogPost::where('id', $id)->first();
        $data['blog_categories'] = $this->get_blog_categories_list();
        $data['post'] = $post;

        return view('blog/edit', $data);
    }

    /**
     * @return \Illuminate\View\View
     */
    public function create(){
        $data['blog_categories'] = $this->get_blog_categories_list();
        return view('blog/create', $data);
    }

    /**
     * @param CreateBlogRequest $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function save(BlogRequest $request){
        //$input = Request::all();

        $user = Auth::user();

        $post = $request->all();
        $post['slug'] = str_slug($post['title'], '-');
        BlogPost::create($post);

        /***********No longer needed because the validation request*********/
        //$post = new BlogPost();
        //$post->title = $input['title'];
        //$post->body = $input['body'];
        //$post->summary = $input['summary'];
        //$post->slug = str_slug($input['title'], '-');
        //$post->blog_category_id = $input['blog_category_id'];
        //$post->author = $user['name'];
        //$post->published = Carbon::now();
        //$post->save();

        return redirect('blog');

    }

    /**
     * @param $id
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, BlogRequest $request){
        //$input = Request::all();

        $post = $request->all();

        //$update_post = array(
        //    'title'=>$input['title'],
        //    'body'=>$input['body'],
        //    'summary'=>$input['summary'],
        //    'blog_category_id'=>$input['blog_category_id'],
        //);

        $update = BlogPost::find($id)->update($post);
        $data['updated'] = $update;

        return redirect('blog');

    }

    /**
     * @return mixed
     */
    public function get_blog_categories_list(){
        $categories = BlogCategory::lists('blog_category','id');

        return $categories;
    }
}
