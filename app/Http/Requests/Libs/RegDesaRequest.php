<?php

namespace App\Http\Requests\Libs;

use App\Http\Requests\Request;

class RegDesaRequest extends Request
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
             'kode_desa'=>'required',
             'nama_desa'=>'required',
             'kecamatan_id'=>'required'
         ];
     }

     public function messages()
     {
       return [
           'kode_desa.required' => 'Kolom Kode Desa tidak boleh kosong',
           'nama_desa.required' => 'Kolom Nama Desa tidak boleh kosong',
           'kecamatan_id.required' => 'Kolom Kecamatan ID tidak boleh kosong'
       ];
     }
}
