<?php

namespace Modules\Media\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostClientsRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama_clients' => 'required',
            'perusahaan_clients' => 'required',
            'nohandphone_clients' => 'required',
            'gambar_clients' => 'image|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'nama_clients.required' => 'Nama clients wajib diisi',
            'perusahaan_clients.required' => 'Perusahaan wajib diisi',
            'nohandphone_clients.required' => 'No. Handphone wajib diisi',
            'gambar_clients.image' => 'Wajib berupa gambar',
            'gambar_clients.max' => 'Gambar maksimal 2048',
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
