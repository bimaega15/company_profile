<?php

namespace Modules\Master\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostSettingsRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nama_settings' => 'required',
            'alamat_settings' => 'required',
            'nohp_settings' => 'required',
            'bahasa_settings' => 'required',
            'zonawaktu_settings' => 'required',
            'email_settings' => 'required',
            'longitude_settings' => 'required',
            'latitude_settings' => 'required',
            'logo_settings' => 'image|max:2048',
            'icon_settings' => 'image|max:2048',

        ];
    }


    public function messages()
    {
        return [
            'logo_settings.image' => 'Logo Wajib berupa gambar',
            'logo_settings.max' => 'Size logo maximal 2048mb',
            'icon_settings.image' => 'Icon Wajib berupa gambar',
            'icon_settings.max' => 'Size icon maximal 2048mb',
            'nama_settings.required' => 'Nama perusahaan wajib diisi',
            'alamat_settings.required' => 'Alamat perusahaan wajib diisi',
            'nohp_settings.required' => 'No. Handphone perusahaan wajib diisi',
            'bahasa_settings.required' => 'Bahasa wajib diisi',
            'zonawaktu_settings.required' => 'Zona Waktu wajib diisi',
            'email_settings.required' => 'Email wajib diisi',
            'longitude_settings.required' => 'Longitude wajib diisi',
            'latitude_settings.required' => 'Longitude wajib diisi',
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
