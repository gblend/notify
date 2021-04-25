<?php

namespace App\Http\Requests\Api\V1;

use Illuminate\Foundation\Http\FormRequest;

class PublicationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'body' => ['required', 'json', 'starts_with:{', 'ends_with:}']
        ];
    }

    public function messages()
    {
        return [
            'body.starts_with' => 'The body must start with: {',
            'body.ends_with' => 'The body must end with: }'
        ];
    }
}
