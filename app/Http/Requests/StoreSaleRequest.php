<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSaleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'sale_owner_id' => 'required|integer',
            'consumer_name'  => 'required|String|max:255',
            'item_code'   => 'required|String|max:255',
            'item_quantity'  => 'required|integer',
            'item_price'   => 'required|integer',
            'shipping_fee'  => 'required|integer',
            'mode_of_payment_id'  => 'required|integer',
            'payment_status_id'  => 'required|integer',
            'courier_id'  => 'required|integer',
            'location'  => 'required|String|max:255'
        ];
    }
}
