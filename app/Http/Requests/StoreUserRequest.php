<?php 
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|min:6',
            'email' => 'required|email',
            'age' => 'required|integer|min:20',
            'date' => 'required|date',
            'password' => 'required|min:8|confirmed',
            'url' => 'nullable|url',
            'image' => 'nullable|file|mimes:jpeg,png,jpg|max:2048',
            'product_name' => 'required|string|min:5',
            'price' => 'required|numeric|min:0.01',
        ];
    }
}
