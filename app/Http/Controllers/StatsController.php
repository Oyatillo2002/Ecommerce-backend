<?php

namespace App\Http\Controllers;

use App\Models\DeliveryMethod;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StatsController extends Controller
{
    public function ordersCount(Request $request)
    {
        $from = Carbon::now()->subMonth();
        $to = Carbon::now();

        if($request->has(['from', 'to'])){
            $from = $request->from;
            $to = $request->to;
        }

        return $this->response(Order::query()
        ->whereBetween('created_at', [$from, Carbon::parse($to)->endOfDay()])
        ->subMonth())->whereRelation('status', 'code', 'closed')
        ->count()
        ;
    }

    public function ordersSalesSum(Request $request)
    {
        $from = Carbon::now()->subMonth();
        $to = Carbon::now();

        if($request->has(['from', 'to'])){
            $from = $request->from;
            $to = $request->to;
        }

        return $this->response(Order::query()
        ->whereBetween('created_at', [$from, Carbon::parse($to)->endOfDay()])
        ->subMonth())->whereRelation('status', 'code', 'closed')
        ->sum('sum')
        ;
    }

    public function deliveryMethodRatio(Request $request)
    {
        $from = Carbon::now()->subMonth();
        $to = Carbon::now();

        if($request->has(['from', 'to'])){
            $from = $request->from;
            $to = $request->to;
        }

        $allOrders = Order::query()
        ->whereBetween('created_at', [$from, Carbon::parse($to)
        ->endOfDay()])
        ->count();

        foreach (DeliveryMethod::all() as $deliveryMethod){
            $deliveryMethod->orders()->whereBetween('created_at', [$from, Carbon::parse($to)->endOfDay()])->count();
        }


        return [
            [
                'name' => 'name',
                'percentage' => 30,
                'amount' => 12,
            ],
            [
                'name' => 'name',
                'percentage' => 30,
                'amount' => 12,
            ],
        ];
    }
}
