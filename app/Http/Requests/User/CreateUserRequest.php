<?php

namespace App\Http\Requests\User;

use App\Http\Requests\ApiBaseRequest;

class CreateUserRequest extends ApiBaseRequest
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
            'name' => 'string|required',
            'email' => 'string|email|required|unique:users,email',
            'phone' => 'required|string',
            'role_id' => 'required|integer|exists:roles,id',
            'password' => 'required|string|min:6|confirmed'
        ];
    }
}
