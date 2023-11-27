<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendAlertRequest extends FormRequest
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
            'sender_name' => 'required|string',
            'source_app' => 'required|string',
            'amount' => 'required|integer',
            'sender_message' => 'nullable|string',
            'is_test' => 'required|boolean',
        ];
    }
}
