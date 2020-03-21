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
            'name'=> 'required|min:6',
            'avatar'=> 'required|image|file|dimensions:min_width=100,min_height=100',
            'group'=>'required'
        ];
    }
    public function messages()
    {
        return [
            'avatar.image'=>'Вы отправили не картинку',
            'avatar.required' => 'отправить аватарку обязательно!',
            'name.required'=> 'Имя не введено',
            'name.min' => 'Минимальная длина имени 6 символов',
            'group.required'=>'Вы не выбрали группу пользователя'
            ];
    }
}
