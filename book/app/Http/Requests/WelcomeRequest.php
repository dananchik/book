<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class WelcomeRequest extends FormRequest
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
            'login' => 'required|min:8|max:50',
            'password' => 'required|min:8|max:50'
        ];
    }
    public function messages()
    {
        return [
            'login.required' => 'вы не ввели логин!',
            'login.min' => 'минимум 8 символов в логине!',
            'login.max' => 'максимум 50 символов в логине!',
            'password.required' => 'вы не ввели пароль!',
            'password.min' => 'минимум 8 символов в пароле!',
            'password.max' => 'максимум 50 символов в пароле!',
        ];
    }
}
