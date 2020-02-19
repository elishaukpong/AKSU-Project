<?php

namespace App\Http\Requests\Apartments;

use Shamaseen\Repository\Generator\Utility\Request;

/**
 * Class ApartmentRequest
 * @package App\Http\Requests\Apartments
 */
class ApartmentRequest extends Request
{
    protected $rules = [
        'name' => 'required | string',
        'landmark' => 'required | string',
        'description' => 'required | string',
        'location' => 'required | string',
        'apartment_type_id' => 'required | integer',
        'apartment_tags' => 'required | array',
        'apartment_file' => 'required | image | mimes:jpeg,png,jpg,gif,svg',
        'apartment_second_file' => 'image | mimes:jpeg,png,jpg,gif,svg',
        'apartment_third_file' => 'image | mimes:jpeg,png,jpg,gif,svg',
    ];

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
        parent::rules();
        $method = $this->method();
        if (null !== $this->get('_method', null)) {
            $method = $this->get('_method');
        }
        $this->offsetUnset('_method');
        switch ($method) {
            case 'DELETE':
            case 'GET':
                    $this->rules = [];
                break;

            case 'POST':

                break;
            // in case of edit
            case 'PUT':
            case 'PATCH':

                break;
            default:
                break;
        }

        return $this->rules;
    }
}
