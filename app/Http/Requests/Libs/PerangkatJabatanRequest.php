<?php

namespace App\Http\Requests\Libs;

use App\Http\Requests\Request;

class PerangkatJabatanRequest extends Request
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
             'perangkat_jabatan'=>'required'
         ];
     }

     public function messages()
     {
       return [
           'perangkat_jabatan.required' => 'Kolom Jabatan Perangkat tidak boleh kosong'
       ];
     }
}
