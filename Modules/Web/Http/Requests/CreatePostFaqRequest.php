<?php

namespace Modules\Web\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreatePostFaqRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'content_faqs' => 'required',
        ];
    }


    public function messages()
    {
        return [
            'content_faqs.required' => 'Content FAQ wajib diisi',
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
