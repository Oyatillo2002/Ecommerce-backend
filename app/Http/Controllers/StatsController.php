<?php

namespace App\Http\Controllers;
use App\Models\DeliveryMethod;
use App\Models\Order;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\LazyCollection;

class StatsController extends Controller
{
    public function ordersCount(Request $request)
    {
        $from = Carbon::now()->subMonth();
        $to = Carbon::now();

        if ($request->has(['from', 'to'])) {
            $from = $request->from;
            $to = $request->to;
        }

        return $this->response(
            Order::query()
                ->whereBetween('created_at', [$from, Carbon::parse($to)->endOfDay()])
                ->subMonth(),
        )
            ->whereRelation('status', 'code', 'closed')
            ->count();
    }

    public function ordersSalesSum(Request $request)
    {
        $from = Carbon::now()->subMonth();
        $to = Carbon::now();

        if ($request->has(['from', 'to'])) {
            $from = $request->from;
            $to = $request->to;
        }

        return $this->response(
            Order::query()
                ->whereBetween('created_at', [$from, Carbon::parse($to)->endOfDay()])
                ->subMonth(),
        )
            ->whereRelation('status', 'code', 'closed')
            ->sum('sum');
    }

    public function deliveryMethodRatio(Request $request)
    {
        /**
         * hozircha keshlash shart emas
         */
        // if (Cache::has('deliveryMethodRatio')){
        //     return Cache::get('deliveryMethodRatio');
        // }

        $from = Carbon::now()->subMonth();
        $to = Carbon::now();

        if ($request->has(['from', 'to'])) {
            $from = $request->from;
            $to = $request->to;
        }

        $response = [];

        $allOrders = Order::query()
            ->whereBetween('created_at', [$from, Carbon::parse($to)->endOfDay()])
            ->whereRelation('status', 'code', 'closed')
            ->count();

        foreach (DeliveryMethod::all() as $deliveryMethod) {
            $deliveryMethodOrders = $deliveryMethod
                ->orders()
                ->whereBetween('created_at', [$from, Carbon::parse($to)->endOfDay()])
                ->whereRelation('status', 'code', 'closed')
                ->count();
            $response[] = [
                'name' => $deliveryMethod->getTranslations('name'),
                'percentage' => round(($deliveryMethodOrders * 100) / $allOrders, 1),
                'amount' => $deliveryMethodOrders,
            ];
        }

        // Cache::put('deliveryMethodRatio', $response, Carbon::now()->addDay());
        return $this->response($response);
    }

    public function ordersCountByDays(Request $request)
    {
        $from = Carbon::now()->subMonth();
        $to = Carbon::now();

        if ($request->has(['from', 'to'])) {
            $from = $request->from;
            $to = $request->to;
        }

        $days = Carbon::create($from, $to);
        $response = new Collection();

        LazyCollection::make($days->toArray())->each(function ($day) use ($from, $to, $response) {
            $count = Order::query()
                ->where('created_at', $day)
                ->whereRelation('status', 'code', 'closed')
                ->count();

            $response[] = [
                'date' => Carbon::parse($day)->format('Y-m-d'),
                'orders-count' => $count,
            ];
        });

        return $this->response($response);
    }
}
