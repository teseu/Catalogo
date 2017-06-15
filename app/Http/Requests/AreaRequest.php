<?php

namespace catalogo\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AreaRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'Area_Nome' => 'required|min:6',
            'Area_Titular' => 'required|min:6',
            'Area_Telefone' => 'required',
            'Area_Email' => 'required',
            'Area_Skype' => 'required',
            'Area_Endereco' => 'required',
            'Area_Logo' => 'required',
            'Area_Alias' => 'required',
            'Area_Secretaria' => 'required',
            'Area_Tipo' => 'required',
        ];
    }
}
