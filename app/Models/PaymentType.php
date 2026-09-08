<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Translatable\HasTranslations;

class PaymentType extends Model
{
    /** @use HasFactory<\Database\Factories\PaymentTypeFactory> */
    use HasFactory, HasTranslations, SoftDeletes;

    protected $fillable = ['name'];

    public array $translatable = ['name'];

    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }
            
    
}
