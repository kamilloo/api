<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class PricingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'amount'        => 'required',
            'tax'           => 'required',
            'price_net'     => 'required',
            'price_gross'   => 'required',
            'paper_id'      => 'required',
            'format_id'     => 'required',
        ];
    }
}
