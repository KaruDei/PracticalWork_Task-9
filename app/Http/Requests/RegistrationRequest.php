<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistrationRequest extends FormRequest
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
	* @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
	*/
	public function rules(): array
	{
		return [
				'surname' => 'required|min:3|max:255',
				'name' => 'required|min:3|max:255',
				'email' => 'required|email:rfc,dns',
				'password' => 'required|min:3|max:255',
				'avatar' => 'image'
		];
	}
}
