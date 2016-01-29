<?php

namespace App\Http\Requests\Libs;

use App\Http\Requests\Request;

class RegRwRequest extends Request
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
             'nama_dusun'=>'required'
         ];
     }

     public function messages()
     {
       return [
           'nama_dusun.required' => 'Kolom Nama Dusun tidak boleh kosong'
       ];
     }
}
