<?php

namespace ConfrariaWeb\Historic\Models;

use Illuminate\Database\Eloquent\Model;

class Historic extends Model
{

    protected $fillable = [
        'user_id', 'text'
    ];

    public function historicable()
    {
        return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }



}
