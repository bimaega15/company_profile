<?php

namespace Modules\Web\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostProfileSingkatRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'gambar_tentangdetail' => 'image|max:2048',
            'judul_tentangdetail' => 'required',
            'pesan_tentangdetail' => 'required',
            'nama_tentangdetail' => 'required',
            'posisi_tentangdetail' => 'required',
            'tentang_kami_id' => 'required',
            'is_active' => 'required'
        ];
    }


    public function messages()
    {
        return [
            'gambar_tentangdetail.image' => 'Wajib berupa gambar',
            'gambar_tentangdetail.max' => 'Maximal gambar 2048mb',
            'judul_tentangdetail.required' => 'Judul profile singkat wajib diisi',
            'pesan_tentangdetail.required' => 'Pesan profile wajib diisi',
            'nama_tentangdetail.required' => 'Nama profile wajib diisi',
            'posisi_tentangdetail.required' => 'Posisi profile wajib diisi',
            'tentang_kami_id.required' => 'Data tentang kami wajib diisi',
            'is_active.required' => 'Is Active wajib diisi',
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
