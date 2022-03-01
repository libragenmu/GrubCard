<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CardFormRequest extends FormRequest
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
            'card-name' => 'required',
            'desc' => 'required',
            'qtd' => ['required', 'integer']
        ];
    }

    protected function prepareForValidation(){
        $this->merge([
            'card-name' => strip_tags($this['card-name']),
            'desc' => strip_tags($this->desc),
            'card-name' => strip_tags($this->qtd),

        ]);

    }
}
