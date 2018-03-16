<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SiswaRequest extends FormRequest
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
            'nis'=>'required|numeric|unique:siswas',
            'no_telepon'=>'required|numeric|unique:siswas',
            'email'=>'required|unique:siswas'
        ];
    }
 
    public function messages()
    {
        return [
            'nis.required'=>'NIS Wajib Di isi',
            'nis.numeric'=>'NIS Tidak Boleh Memakai Huruf',
            'no_telepon.required'=>'No Telepon Wajib Di isi',
            'no_telepon.numeric'=>'No Telepon Tidak Boleh Memakai Huruf',
            'email'=>'Email Ini Telah Dipakai'
        ];
    }
}
