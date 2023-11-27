<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
            'user_id' => 'required|exists:users,id',
            'about' => 'nullable|string',
            'plan_start_date' => 'nullable|date',
            'plan_end_date' => 'nullable|date',
            'alerts_sent' => 'nullable|integer',
            'unique_url' => 'nullable|string',
            'is_paid' => 'required|boolean',
        ];
    }
}
