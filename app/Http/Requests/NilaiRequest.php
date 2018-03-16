<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NilaiRequest extends FormRequest
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
    public function rules( )
    {
        return [
            'id_siswa'=>'required|unique:nilais'
        ];
    }

    public function messages()
    {
        return [
            'id_siswa.required'=>'nama Siswa telah dipakai'
        ];
    }
}
