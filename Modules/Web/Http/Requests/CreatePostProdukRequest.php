<?php

namespace Modules\Web\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostProdukRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama_produk' => 'required',
            'gambar_produk' => 'image|max:2048',
            'jenis_produk' => 'required'
        ];
    }


    public function messages()
    {
        return [
            'nama_produk.required' => 'Nama produk wajib diisi',
            'jenis_produk.required' => 'Jenis produk wajib diisi',
            'gambar_produk.image' => 'Wajib berupa gambar',
            'gambar_produk.max' => 'Maximal gambar 2048mb',
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
