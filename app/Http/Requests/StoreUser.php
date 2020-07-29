<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'slug' => 'string|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ];
    }

    public function data()
    {
        return [
            'name' => $this->get('name'),
            'email' => $this->get('email'),
            'slug' => str_slug($this->get('email')),
            'password' => bcrypt($this->get('password'))
        ];
    }


}
