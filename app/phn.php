<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class phn extends Model
{   
    
    protected $fillable = [
        'phn','customer_id',
    ];

    public function customer()
    {
        return $this->belongsTo('App\Customer');
    }
}
