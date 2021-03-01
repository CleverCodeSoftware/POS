<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoFormRequest extends FormRequest
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
            'idcategoria'=>'required',
            'codigo'=>'required|max:50',
            'nombre'=>'required|max:50',
            'stock_total'=>'required|numeric',
            'descripcion'=>'max:512',
            'imagen'=>'mimes:jpeg,bmp,png'
        ];
    }

    public function messages()
    {
        return [
            'idcategoria.required' => 'El campo categoria es obligatorio',
            'codigo.required' => 'El campo codigo es obligatorio',
            'nombre.required' => 'El campo nombre es obligatorio',
            'stock_total.required' => 'El campo stock es obligatorio',
        ];
    }
}
