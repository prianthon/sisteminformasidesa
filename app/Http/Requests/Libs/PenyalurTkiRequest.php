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
             'nomor_pptkis'=>'required',
             'tanggal_izin'=>'required',
             'alamat_kantor'=>'required',
             'provinsi_id'=>'required'
         ];
     }

     public function messages()
     {
       return [
           'nama_pptkis.required' => 'Kolom PPTKIS tidak boleh kosong',
           'nomor_pptkis.required' => 'Kolom Nomor Izin PPTKIS tidak boleh kosong',
           'tanggal_izin.required' => 'Kolom Tanggal Izin tidak boleh kosong',
           'alamat_kantor.required' => 'Kolom Alamat Kantor tidak boleh kosong',
           'provinsi_id.required' => 'Kolom Provinsi ID tidak boleh kosong'
       ];
     }
}
