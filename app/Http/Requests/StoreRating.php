<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class StoreRating extends FormRequest
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
            'rating' => 'required',
            'rating_description'=>'nullable',
        ];
    }

    public function data()
    {
        return [
            'user_id' => auth()->id(),
            'rating' => $this->get('rating'),
            'rating_description'=>$this->get('rating_description'),
        ];
    }
}
