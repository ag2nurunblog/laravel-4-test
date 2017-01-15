<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'name' => 'required|max:255',
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6',
            'active' => 'required|numeric|min:1|max:2',
            'company' => 'required|numeric|min:1'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'O campo é obrigatório!',
            'email' => 'O campo deve ser do tipo e-mail!',
            'min' => 'O campo é muito curto!',
            'max' => 'O campo é muito longo!',
            'numeric' => 'O campo não é numérico!',
            'confirmed' =>  'As senhas não são iguais!'
        ];
    }
}
