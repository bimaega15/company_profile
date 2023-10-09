<?php

namespace Modules\Media\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostPortfolioRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'judul_projects' => 'required',
            'kategori_portfolio_id' => 'required',
            'gambar_projects' => 'image|max:2048',

        ];
    }

    public function messages()
    {
        return [
            'judul_projects.required' => 'Judul project wajib diisi',
            'kategori_portfolio_id.required' => 'Kategori project wajib diisi',
            'gambar_projects.image' => 'Wajib berupa gambar',
            'gambar_projects.max' => 'Gambar maksimal 2048',
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
