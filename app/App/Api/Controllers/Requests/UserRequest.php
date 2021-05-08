<?php


namespace App\Api\Controllers\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{

    public function rules(): array
    {
        return [
            'email' => ['required','string'],
            'password' => ['required','string']
        ];
    }

    public function messages():array
    {
        return [
            'email.required' => 'O campo precisa ser obrigatório',
            'password.required' => 'O campo email precisa ser preechidos'
        ];
    }

}