<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\BlogPost;
use App\BlogCategory;
use App\Http\Requests\BlogRequest;
use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;
use Request;

class AdminController extends Controller {

    public function index(){
        //check to see if the admin user is logged in, if so redirect to homepage, otherwise show admin login form
        return view('admin/index');
    }

}