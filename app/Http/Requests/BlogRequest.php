<?php namespace App\Http\Requests;

use App\Http\Requests\Request;

class BlogRequest extends Request {


    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|min:5',
            'blog_category_id' => 'required|Integer',
            'body' => 'required',
            'summary'  => 'required',
            'published' => 'required|date',
        ];
    }

}
