<?php

namespace App\Http\Requests\Records\FluidIntake;

use Illuminate\Foundation\Http\FormRequest;

class StoreFluidIntakeRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'time' => ['required', 'string', 'max:255'],
            'oral' => ['nullable', 'string', 'max:255'],
            'parental' => ['nullable', 'string', 'max:255'],
            'intake_total' => ['nullable', 'string', 'max:255'],
            'urine' => ['nullable', 'string', 'max:255'],
            'drainage' => ['nullable', 'string', 'max:255'],
            'others' => ['nullable', 'string', 'max:255'],
            'output_total' => ['nullable', 'string', 'max:255'],
        ];
    }
}
