<?php

namespace App\Http\Requests\Libs;

use App\Http\Requests\Request;

class RegNegaraRequest extends Request
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
             'kode_negara'=>'required',
             'nama_negara'=>'required'
         ];
     }

     public function messages()
     {
       return [
           'kode_negara.required' => 'Kolom Kode Negara tidak boleh kosong',
           'nama_negara.required' => 'Kolom Nama Negara tidak boleh kosong'
       ];
     }
}
