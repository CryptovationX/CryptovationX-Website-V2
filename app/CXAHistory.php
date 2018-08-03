<?php

namespace CryptovationX;

use Illuminate\Database\Eloquent\Model;

class CXAHistory extends Model
{
    protected $fillable = [
        'knowyc_id', 'type', 'amount_usd', 'token', 'total_token', 'bonus'
    ];

    public function knowyc()
    {
        return $this->belongsTo(Knowyc::class);
    }
}
