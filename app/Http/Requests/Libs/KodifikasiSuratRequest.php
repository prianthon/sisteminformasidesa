<?php

namespace App\Http\Requests\Libs;

use App\Http\Requests\Request;

class KodifikasiSuratRequest extends Request
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
             'kode_surat'=>'required',
             'nama_surat'=>'required',
             'parent_id'=>'required'
         ];
     }

     public function messages()
     {
       return [
           'kode_surat.required' => 'Kolom Kode Surat tidak boleh kosong',
           'nama_surat.required' => 'Kolom Nama Surat tidak boleh kosong',
           'parent_id.required' => 'Kolom Parent tidak boleh kosong'
       ];
     }
}
