<?php

namespace App\Http\Requests\Libs;

use App\Http\Requests\Request;

class RegIstilahRequest extends Request
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
             'istilah_dusun'=>'required'
         ];
     }

     public function messages()
     {
       return [
           'istilah_dusun.required' => 'Kolom Istilah Dusun tidak boleh kosong'
       ];
     }
}
