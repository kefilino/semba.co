<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserSignupRequest extends FormRequest
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
            'nama' => 'required|min:3|max:50',
            'email' => 'required|email|unique:users,email',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'nik' => 'size:16|required',
            'kk' => 'size:16|required',
            'alamat' => 'min:6|required',
            'kode_pos' => 'size:5|required'
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'nama.min' => 'Nama tidak boleh kurang dari 3 huruf.',
            'nama.max' => 'Nama tidak boleh lebih dari 50 huruf.',
            'email.unique' => 'Email telah digunakan, silahkan gunakan alamat email lain.',
            'password.min' => 'Password harus memiliki minimal 6 huruf.',
            'password.same' => 'Konfirmasi password tidak sama dengan password yang dimasukkan.',
            'nik.size' => 'Nomor Induk Kependudukan perlu seluruh 16 karakter.',
            'kk.size' => 'Nomor Kartu Keluarga perlu seluruh 16 karakter.',
            'alamat.min' => 'Alamat yang dimasukkan terlalu pendek.',
            'kode_pos.size' => 'Kode Pos memerlukan 5 digit.'
        ];
    }
}
