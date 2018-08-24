<?php

namespace CryptovationX;

use Illuminate\Database\Eloquent\Model;

class Knowyc extends Model
{
    protected $fillable = [
        'account_id',
        'firstname',
        'lastname',
        'email',
        'facebook',
        'mobile',
        'users'
    ];

    public function user()
    {
        return $this->hasOne('CryptovationX\User');
    }

    public function token()
    {
        return $this->hasMany(CXAHistory::class);
    }
}
