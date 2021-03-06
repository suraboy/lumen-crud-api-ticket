<?php

namespace App\Http\Requests\Tickets;

use App\Contracts\FormRequest;

/**
 * Class DeleteTicketsRequest
 * @package App\Http\Requests\Agreement
 */
class DeleteTicketsRequest extends FormRequest
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
     * @var array
     */
    protected $urlParameters = [
        'id',
    ];

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return array();
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
