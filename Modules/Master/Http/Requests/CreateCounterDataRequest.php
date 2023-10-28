<?php

namespace Modules\Master\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCounterDataRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama_counterdata' => 'required',
            'jumlah_counterdata' => 'required',
            'gambar_counterdata' => 'image|max:2048',

        ];
    }


    public function messages()
    {
        return [
            'nama_counterdata.required' => 'Nama counter data wajib diisi',
            'jumlah_counterdata.required' => 'Jumlah counter data wajib diisi',
            'gambar_counterdata.image' => 'Gambar counter berupa gambar',
            'gambar_counterdata.max' => 'Gambar counter maximal 2048mb',
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
