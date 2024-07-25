<?php

namespace Modules\Doctor\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateDoctorRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:355',
            'bio' => 'nullable|string|max:355',
            'phone' => 'nullable|string|max:355',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'position' => 'nullable|string|max:355',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
}
