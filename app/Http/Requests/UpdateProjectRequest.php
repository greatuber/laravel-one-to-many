<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            "name_project" => "required|string|max:200",
            "description" => "required|string"           
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function messages()
    {
        return [
            "name_project.required" => "Il nome del progetto non può essere vuoto",
            "name_project.string" => "Il nome del progetto dev'essere un testo",
            "name_project.max" => "Il nome del progetto è non può superare i 200 caratteri",
            "description.required" => "La descrizione del progetto non può essere vuota",
            "description.string" => "La descrizione del progetto dev'essere un testo",
        ];
    }
}
