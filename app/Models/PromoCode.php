<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PromoCode extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable =[
        'code',
        'discount_type',
        'dicount',
        'valid_until',
        'is_used'
    ];

    public function transaction()
    {
        return $this->hasOne(Transaction::class);
    }
}
