<?php

namespace Modules\Web\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostBeritaRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'judul_berita' => 'required',
            'isi_berita' => 'required',
            'tanggalpublish_berita' => 'required',
            'isactive_berita' => 'required',
            'kategori_berita_id' => 'required',
            'gambar_berita' => 'image|max:2048',
            'video_berita' => 'file',

        ];
    }


    public function messages()
    {
        return [
            'judul_berita.required' => 'Judul berita wajib diisi',
            'isi_berita.required' => 'Isi berita wajib diisi',
            'tanggalpublish_berita.required' => 'Tanggal publish wajib diisi',
            'isactive_berita.required' => 'Status aktif wajib diisi',
            'kategori_berita_id.required' => 'Kategori Berita wajib diisi',
            'gambar_berita.image' => 'Gambar berita wajib berupa gambar',
            'gambar_berita.max' => 'Ukuran gambar berita maksimal 2048mb',
            'video_berita.file' => 'Video wajib berupa file',
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
