<?php

namespace App\Http\Requests\Libs;

use App\Http\Requests\Request;

class StatusKawinRequest extends Request
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
             'status_kawin'=>'required'
         ];
     }

     public function messages()
     {
       return [
           'status_kawin.required' => 'Kolom Status Kawin tidak boleh kosong'
       ];
     }
}
