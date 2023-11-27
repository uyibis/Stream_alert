<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class URLDataRequest extends FormRequest
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
            'audio_link' => 'nullable|string',
            'gif_link' => 'nullable|string',
            'alert_duration' => 'nullable|integer|min:0|max:10',
            'sound_volume' => 'nullable|integer',
            'min_amount' => 'nullable|integer',
            'message_template' => 'nullable|string',
        ];
    }
}
