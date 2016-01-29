<?php

namespace App\Http\Requests\Libs;

use App\Http\Requests\Request;

class RegRtRequest extends Request
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
             'nomor_rt'=>'required'
         ];
     }

     public function messages()
     {
       return [
           'nomor_rt.required' => 'Kolom Nomor RT tidak boleh kosong'
       ];
     }
}
