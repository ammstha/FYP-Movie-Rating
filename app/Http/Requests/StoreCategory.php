<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCategory extends FormRequest
{
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
            'name' => 'required|string|max:255',
            'slug' => 'string|alpha_dash|unique:users',
        ];
    }
    public function data()
    {
        return [
            'name' => $this->get('name'),
            'slug' => str_slug($this->get('name')),
        ];
    }
}
