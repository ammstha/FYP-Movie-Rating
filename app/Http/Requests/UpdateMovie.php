<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateMovie extends FormRequest
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
//        dd($this->movie);
        return [
            'movie_name' => 'required|string|max:100|unique:movies,movie_name,' . $this->movie->id,
            'movie_details'=>'required',
            'feature_movie'=>'nullable',
            'running_time'=>'nullable',
            'release_date'=>'date',
            'cover_image'=>'image|nullable',
            'poster_image'=>'image|nullable',
        ];
    }
}
