<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTareaRequest extends FormRequest
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
        $rules = [
            'title' => 'required|string|max:200',
            'estado' => 'required|string|in:pendiente,en progreso,completada',
            'fecha_limite' => 'required|date',
            'descripcion' => 'nullable|string|max:500'
        ];

        if ($this->isMethod('patch')){
            foreach ($rules as $key => $rule){
                $rules[$key] = 'sometimes|' . $rule;
            }
        }
        return $rules;
    }
}
