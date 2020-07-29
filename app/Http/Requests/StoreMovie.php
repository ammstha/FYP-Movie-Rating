<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMovie extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
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
            'movie_name'=>'required|max:100',
            'movie_details'=>'required',
            'feature_movie'=>'nullable',
            'running_time'=>'nullable',
            'release_date'=>'date',
            'slug'=>'string|unique:movies',
            'cover_image'=>'image|nullable',
            'poster_image'=>'image|nullable',
//            'category_id'=>'',
//            'genre_id'=>'',
//            'user_id'=>'',
        ];
    }
}
