<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'name', 'email','address','image','password'
    ];
    public function phone()
    {
        return $this->hasOne('App\phn');
    }
}
