<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSetting extends FormRequest
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
//            'title' => 'required|string|max:100' . $this->setting->id,
             'value' => 'required|string|max:255'
        ];
    }
    public function data()
    {
        return [
            'value'  => $this->get('value')
        ];
    }
}
