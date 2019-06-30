<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            //
            'name'=>'required|unique:users,name',
            'email'=>'max:5|required'
        ];
    }

    public function messages()
    {
        return [
            //
            'name.required' => 'ПОЛЕ :attribute обязательно к заполнению ', //преминимо к правилу типа required, только для поля name
//            'required' => 'ПОЛЕ :attribute обязательно к заполнению ',  //преминимо ко всем правилам типа required
        ];
    }
}
