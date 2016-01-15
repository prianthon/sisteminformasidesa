<?php

namespace App\Http\Requests\Libs;

use App\Http\Requests\Request;

class RegKecamatanRequest extends Request
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
             'kode_kecamatan'=>'required',
             'nama_kecamatan'=>'required',
             'kabupaten_id'=>'required'
         ];
     }

     public function messages()
     {
       return [
           'kode_kecamatan.required' => 'Kolom Kode Kecamatan tidak boleh kosong',
           'nama_kecamatan.required' => 'Kolom Nama Kecamatan tidak boleh kosong',
           'kabupaten_id.required' => 'Kolom Kabupaten ID tidak boleh kosong'
       ];
     }
}
