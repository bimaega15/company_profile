<?php

namespace Modules\Media\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostVideoRequest extends FormRequest
{
    public function rules()
    {
        return [
            'judul_videos' => 'required',
            'file_videos' => 'file',
        ];
    }


    public function messages()
    {
        return [
            'judul_videos.required' => 'Judul videos wajib diisi',
            'file_videos.file' => 'Wajib berupa gambar',
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
