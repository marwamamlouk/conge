<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployesRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */

    public function authorize()
    {

        return true ;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    public function rules()
    {

        return [
            "name" => "required",
            "email" => "required | email",
            "adresse" => "required",
            "password" => "required | min: 8 ",
            "numtel" => "required | integer",
            "date_recrutement" => "required",
            "grade" => "required",
            "etat" => "required",
            "solde" => "required | integer",
            "profession" => "required",
            "type_contrat" => "required",
            "cin" => "required",
        ];
    }
}
