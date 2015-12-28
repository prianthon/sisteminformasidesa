<?php

namespace App\Http\Requests\Libs;

use App\Http\Requests\Request;

class AgamaRequest extends Request
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
            'agama'=>'required'
        ];
    }

    public function messages()
    {
      return [
          'agama.required' => 'Kolom Agama tidak boleh kosong'
      ];
    }
}
