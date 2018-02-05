<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveFoodStockItem extends FormRequest
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
            'item_name'      => 'required|string',
            'description'    => 'string|nullable|max:50',
            'item_type'      => 'required|integer',
            'current_amount' => 'required|integer|min:1',
            'unit'           => 'required|integer',
            'fav_seller'     => 'integer'
        ];
    }
}
