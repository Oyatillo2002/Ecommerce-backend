<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Http\Resources\OrderResource;
use App\Http\Resources\ProductResource;
use App\Models\Order;
use App\Models\Product;
use App\Models\Stock;
use App\Models\UserAddress;

class OrderController extends Controller
{
    public static function middleware(): array
    {
        return ['auth:sanctum'];
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return auth('sanctum')->user()->orders;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreOrderRequest $request)
    {
        $sum = 0;
    $products = [];
    $address = UserAddress::find($request->address_id);

    foreach ($request->input('products') as $product) {
        $prod = Product::with('stocks')->findOrFail($product['product_id']);
        // $stock = $prod->stocks->firstWhere('id', $product['stock_id']);

        // DIAGNOSTIKA - har bir qadamni ko'rsatadi
        // logger()->info('Order item debug', [
        //     'product_id'  => $product['product_id'],
        //     'stock_id'    => $product['stock_id'],
        //     'stock_found' => $stock ? true : false,
        //     'stock_qty'   => $stock?->quantity,
        //     'request_qty' => $product['quantity'],
        // ]);

        // if (!$stock) {
        //     return response()->json([
        //         'error' => "Stock topilmadi",
        //         'product_id' => $product['product_id'],
        //         'stock_id'   => $product['stock_id'],
        //     ], 422);
        // }

        // if ($stock->quantity < $product['quantity']) {
        //     return response()->json([
        //         'error' => "Omborda yetarli emas",
        //         'stock_id'   => $stock->id,
        //         'mavjud'     => $stock->quantity,
        //         'soralgan'   => $product['quantity'],
        //     ], 422);
        // }
        if (
            $prod->stocks()->find($product['stock_id']) &&
            $prod->stocks()->find($product['stock_id'])->quantity >= $product['quantity']
        ){
            $productWithStock = $prod->withStock($product['stock_id']);
            $productResource = new ProductResource($productWithStock);
        }

        

        $sum  += $productResource['price'];

        $products[] = $productResource->resolve();

    }
    // dd($sum);
    

    auth('sanctum')->user()->orders()->create([
        'comment'            => $request->comment,
        'delivery_method_id' => $request->delivery_method_id,
        'payment_type_id'    => $request->payment_type_id,
        'sum'                => $sum,
        'address'            => $address,
        'products'           => $products,
    ]);

    return 'success';

       
}
    

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        return new OrderResource($order);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOrderRequest $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
