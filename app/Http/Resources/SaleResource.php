<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SaleResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'sale_owner_id' => $this->sale_owner_id,
            'consumer_name' => $this->consumer_name,
            'item_code' => $this->item_code,
            'item_quantity' => $this->item_quantity,
            'item_price' => $this->item_price,
            'shipping_fee' => $this->shipping_fee,
            'mode_of_payment_id' => $this->mode_of_payment_id,
            'payment_status_id' => $this->payment_status_id,
            'courier_id' => $this->courier_id,
            'location' => $this->courier_id,
          ];
    }
}
