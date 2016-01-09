<?php

namespace App\Http\Requests\Libs;

use App\Http\Requests\Request;

class RegKabupatenRequest extends Request
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
             'kode_kabupaten'=>'required',
             'nama_kabupaten'=>'required',
             'provinsi_id'=>'required'
         ];
     }

     public function messages()
     {
       return [
           'kode_kabupaten.required' => 'Kolom Kode Kabupaten tidak boleh kosong',
           'nama_kabupaten.required' => 'Kolom Nama Kabupaten tidak boleh kosong',
           'provinsi_id.required' => 'Kolom Provinsi ID tidak boleh kosong'
       ];
     }
}
