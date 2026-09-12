<?php

namespace Database\Seeders;

use App\Models\Status;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Status::create([
            'name' => [
                'uz' => 'Yangi',
                'en' => 'New',
                'ru' => 'Новый'
            ],
            'code' => 'new',
            'for' => 'order'
        ]);

        Status::create([
            'name' => [
                'uz' => 'Tasdiqlandi',
                'en' => 'Confirmed',
                'ru' => 'Одобренный'
            ],
            'code' => 'confirmed',
            'for' => 'order'
        ]);

        Status::create([
            'name' => [
                'uz' => 'Ishlanyapti',
                'en' => 'Proccessing',
                'ru' => 'Обработка'
            ],
            'code' => 'proccessing',
            'for' => 'order'
        ]);

        Status::create([
            'name' => [
                'uz' => 'Yetkazib berilyapti',
                'en' => 'Shipping',
                'ru' => 'Доставляется'
            ],
            'code' => 'shipping',
            'for' => 'order'
        ]);

        Status::create([
            'name' => [
                'uz' => 'Yetkazib berildi',
                'en' => 'Delivered',
                'ru' => 'Доставленный'
            ],
            'code' => 'delivered',
            'for' => 'order'
        ]);

        Status::create([
            'name' => [
                'uz' => 'Tugatildi',
                'en' => 'Completed',
                'ru' => 'Завершенный'
            ],
            'code' => 'completed',
            'for' => 'order'
        ]);

        Status::create([
            'name' => [
                'uz' => 'Yopildi',
                'en' => 'Closed',
                'ru' => 'Закрыто'
            ],
            'code' => 'closed',
            'for' => 'order'
        ]);

        Status::create([
            'name' => [
                'uz' => 'Bekor qilindi',
                'en' => 'Canceled',
                'ru' => 'Отменено'
            ],
            'code' => 'canceled',
            'for' => 'order'
        ]);

        Status::create([
            'name' => [
                'uz' => 'Qaytarib berildi',
                'en' => 'Refunded',
                'ru' => 'Возмещено'
            ],
            'code' => 'refunded',
            'for' => 'order'
        ]);

        Status::create([
            'name' => [
                'uz' => "To'lov kutilmoqda",
                'en' => 'Waiting_payment',
                'ru' => 'Ожидание оплаты'
            ],
            'code' => 'waiting_payment',
            'for' => 'order'
        ]);

        Status::create([
            'name' => [
                'uz' => "To'landi",
                'en' => 'Paid',
                'ru' => 'Оплаченный'
            ],
            'code' => 'paid',
            'for' => 'order'
        ]);

        Status::create([
            'name' => [
                'uz' => "To'lovda xatolik",
                'en' => 'Payment_error',
                'ru' => 'Ошибка оплаты'
            ],
            'code' => 'payment_error',
            'for' => 'order'
        ]);
    }
}
