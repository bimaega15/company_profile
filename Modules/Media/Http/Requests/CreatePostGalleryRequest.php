<?php

namespace Modules\Media\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostGalleryRequest extends FormRequest
{
    public function rules()
    {
        return [
            'judul_gallery' => 'required',
            'gambar_gallery' => 'image|max:2048',
        ];
    }


    public function messages()
    {
        return [
            'judul_gallery.required' => 'Judul gallery wajib diisi',
            'gambar_gallery.image' => 'Wajib berupa gambar',
            'gambar_gallery.max' => 'Gambar maksimal 2048',
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
