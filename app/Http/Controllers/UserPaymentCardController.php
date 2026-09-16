<?php

namespace App\Http\Controllers;

use App\Models\UserPaymentCard;
use App\Http\Requests\StoreUserPaymentCardRequest;
use App\Http\Requests\UpdateUserPaymentCardRequest;

class UserPaymentCardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->response(auth('sanctum')->user()->paymentCards);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserPaymentCardRequest $request)
    {
        $card = auth('sanctum')->user()->paymentCards()->create([
            'name' => encrypt($request->name),
            'number' => encrypt($request->number),
            'exp_date' => encrypt($request->exp_date),
            'holder_name' => encrypt($request->holder_name),
            'last_four_numbers' => encrypt(substr($request->number, -4)),
            'payment_card_type_id' => $request->payment_card_type_id,
        ]);
    
        // return $this->success('card added');
    }

    /**
     * Display the specified resource.
     */
    public function show(UserPaymentCard $userPaymentCard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(UserPaymentCard $userPaymentCard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserPaymentCardRequest $request, UserPaymentCard $userPaymentCard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(UserPaymentCard $userPaymentCard)
    {
        //
    }
}
