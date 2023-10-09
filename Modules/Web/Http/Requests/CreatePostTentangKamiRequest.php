<?php

namespace Modules\Web\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostTentangKamiRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'sejarah_tentangkami' => 'required',
            'visimisi_tentangkami' => 'required',
            'nilainilai_tentangkami' => 'required',
        ];
    }


    public function messages()
    {
        return [
            'sejarah_tentangkami.required' => 'Sejarah Perusahaan wajib diisi',
            'visimisi_tentangkami.required' => 'Visi & Misi wajib diisi',
            'nilainilai_tentangkami.required' => 'Nilai nilai wajib diisi',
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
