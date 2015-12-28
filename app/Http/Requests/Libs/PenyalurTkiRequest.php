<?php

namespace App\Http\Requests\Libs;

use App\Http\Requests\Request;

class PenyalurTkiRequest extends Request
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
             'nama_pptkis'=>'required',
             'penanggung_jawab'=>'required',
             'nomor_pptkis'=>'required',
             'alamat_kantor'=>'required'
         ];
     }

     public function messages()
     {
       return [
           'nama_pptkis.required' => 'Kolom PPTKIS tidak boleh kosong',
           'penanggung_jawab' => 'Kolom Penanggung Jawab tidak boleh kosong',
           'nomor_pptkis' => 'Kolom Nomor PPTKIS tidak boleh kosong',
           'alamat_kantor' => 'Kolom Alamat Kantor tidak boleh kosong'
       ];
     }
}
