<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuruRequest extends FormRequest
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
            'nama_guru'=>'required|unique:gurus',
            'nipg'=>'required|numeric|unique:gurus',
            'no_telepon'=>'required|numeric|unique:gurus',
            'email'=>'required|unique:gurus'
        ];
    }

    public function messages()
    {
        return [
            'nama_guru.required'=>'nama guru telah dipakai',
            'nipg.required'=>'nipg wajib di isi',
            'nipg.numeric'=>'nipg tidak boleh memakai huruf',
            'no_telepon.required'=>'no telepon wajib di isi',
            'no_telepon.numeric'=>'no telepon tidak boleh memakai huruf',
            'email'=>'email ini telah dipakai'
        ];
    }
}
