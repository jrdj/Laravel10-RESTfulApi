<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Models\Sale;
use App\Http\Requests\StoreSaleRequest;
use App\Http\Requests\UpdateSaleRequest;
use App\Http\Resources\SaleResource;

class SaleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $sale = Sale::leftJoin('mode_of_payments', 'sales.mode_of_payment_id', '=', 'mode_of_payments.id')
            ->leftJoin('payment_statuses', 'sales.payment_status_id', '=', 'payment_statuses.id')
            ->leftJoin('couriers', 'sales.courier_id', '=', 'couriers.id')
            ->get();

        return SaleResource::collection($sale);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSaleRequest $request)
    {
        $sale = Sale::create($request->validated());
        return SaleResource::make($sale);
    }

    /**
     * Display the specified resource.
     */
    public function show(Sale $sale)
    {
        return SaleResource::make($sale);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSaleRequest $request, Sale $sale)
    {
        $sale->update($request->validated());
        return SaleResource::make($sale);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Sale $sale)
    {
        $sale->delete();
        return response()->noContent();
    }
}
