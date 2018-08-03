<?php

namespace CryptovationX;

use Illuminate\Database\Eloquent\Model;

class Knowyc extends Model
{
    public function user()
    {
        return $this->hasOne('CryptovationX\User');
    }

    public function token()
    {
        return $this->hasMany(CXAHistory::class);
    }
}
