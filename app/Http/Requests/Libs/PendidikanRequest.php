<?php

namespace App\Http\Requests\Libs;

use App\Http\Requests\Request;

class PendidikanRequest extends Request
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
             'pendidikan'=>'required'
         ];
     }

     public function messages()
     {
       return [
           'pendidikan.required' => 'Kolom Pendidikan tidak boleh kosong'
       ];
     }
}
