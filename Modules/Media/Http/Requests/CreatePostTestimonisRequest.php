<?php

namespace Modules\Media\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostTestimonisRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'judul_testimoni' => 'required',
            'pesan_testimoni' => 'required',
            'nama_testimoni' => 'required',
            'posisi_testimoni' => 'required',
            'rating_testimoni' => 'required',
            'gambar_testimoni' => 'image|max:2048',

        ];
    }

    public function messages()
    {
        return [
            'judul_testimoni.required' => 'Judul wajib diisi',
            'pesan_testimoni.required' => 'Pesan wajib diisi',
            'nama_testimoni.required' => 'Nama wajib diisi',
            'posisi_testimoni.required' => 'Posisi wajib diisi',
            'rating_testimoni.required' => 'Rating wajib diisi',

            'gambar_testimoni.image' => 'Wajib berupa gambar',
            'gambar_testimoni.max' => 'Gambar maksimal 2048',
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
