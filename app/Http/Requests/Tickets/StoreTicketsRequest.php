<?php

namespace App\Http\Requests\Tickets;

use App\Contracts\FormRequest;

/**
 * Class StoreTicketsRequest
 * @package App\Http\Requests\Agreement
 */
class StoreTicketsRequest extends FormRequest
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
        return array(
            'name' => 'required|array',
            'name.*' => 'filled',
            'description' => 'filled|string',
            'tel' => 'required|min:10|max:13',
            'status' => 'required|in:pending,accepted,resolved,rejected',
        );
    }

    /**
     * Get custom messages for validator errors.
     *
     * @return array
     */
    public function messages()
    {
        return array(#'name.required' => ':attribute is required'
        );

    }

    /**
     * @return array
     */
    public function attributes()
    {
        return array(#'name' => trans('unit.name'),
        );
    }
}
