<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateCategory extends FormRequest
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
            'name' => 'required|string|max:255|unique:categories,name,' . $this->category->id
        ];
    }
    public function data()
    {
        return [
            'name'  => $this->get('name'),
            'slug'   => str_slug($this->get('name')),
        ];
    }

}
