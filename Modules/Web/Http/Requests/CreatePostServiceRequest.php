<?php

namespace Modules\Web\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostServiceRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'judul_service' => 'required',
            'deskripsi_service' => 'required',
            'konten_service' => 'required',
            'waktu_service' => 'required',
            'gambar_service' => 'image|max:2048',
        ];
    }


    public function messages()
    {
        return [
            'judul_service.required' => 'Judul service wajib diisi',
            'deskripsi_service.required' => 'Isi service wajib diisi',
            'konten_service.required' => 'Konten service wajib diisi',
            'waktu_service.required' => 'Waktu service wajib diisi',
            'gambar_service.image' => 'Gambar service wajib berupa gambar',
            'gambar_service.max' => 'Ukuran gambar service maksimal 2048mb',
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
