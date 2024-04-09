<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class RegisterStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'min:6'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users', 'email')],
            'password' => 'required|min:6',
            'password_confirmation' => 'required|min:6|required_with:password|same:password'

        ];
    }

    public function messages(){
        return[
            'name.required' => 'The name field is required',
            'email.required' => 'The email field is required',
            'password.required' => 'The password field is required',
            'password_confirmation.required' => 'The password confirmation field is required',
            'email.unique' => 'The email has already been taken',
            'password.min' => 'The password must be at least :min characters',
            'password_confirmation.same' => 'The password confirmation does not match'
        ];
        
    }

    protected function failedValidation(Validator $validator) { 
        echo json_encode($validator->errors());
        exit();
    }
}
