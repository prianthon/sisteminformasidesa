<?php

namespace App\Http\Requests\Libs;

use App\Http\Requests\Request;

class RegProvinsiRequest extends Request
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
             'kode_provinsi'=>'required',
             'nama_provinsi'=>'required'
         ];
     }

     public function messages()
     {
       return [
           'kode_provinsi.required' => 'Kolom Kode Provinsi tidak boleh kosong',
           'nama_provinsi.required' => 'Kolom Nama Provinsi tidak boleh kosong'
       ];
     }
}
