<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Receipt extends Model
{
    protected $fillable = [
        'receipt_number',
        'student_name',
        'receipt_date',
        'amount_words',
        'total',
        'is_locked',
    ];
    protected static function booted()
    {

        static::updating(function ($receipt) {
            if ($receipt->is_locked) {
                throw new \Exception('Receipt is locked.');
            }
        });

        static::deleting(function ($receipt) {
            if ($receipt->is_locked) {
                throw new \Exception('Receipt is locked.');
            }
        });
     }

    public function items()
    {
        return $this->hasMany(ReceiptItem::class);
    }
}
