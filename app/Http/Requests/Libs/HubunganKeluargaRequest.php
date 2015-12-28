<?php

namespace App\Http\Requests\Libs;

use App\Http\Requests\Request;

class HubunganKeluargaRequest extends Request
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
             'hubungan_keluarga'=>'required'
         ];
     }

     public function messages()
     {
       return [
           'hubungan_keluarga.required' => 'Kolom Hubungan Keluarga tidak boleh kosong'
       ];
     }
}
