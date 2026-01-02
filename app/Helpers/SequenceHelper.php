<?php

use App\Models\Sequence;
use Illuminate\Support\Facades\DB;

if (! function_exists('nextReceiptNumber')) {
    function nextReceiptNumber(): string
    {
        return DB::transaction(function () {

            $sequence = Sequence::firstOrCreate(
                ['key' => 'receipt'],
                ['current_number' => 0]
            );

            $sequence->increment('current_number');

            return str_pad($sequence->current_number, 4, '0', STR_PAD_LEFT);
        });
    }

}
