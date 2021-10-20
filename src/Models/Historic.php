<?php

namespace ConfrariaWeb\Historic\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

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
        return $this->belongsTo(Config::get('cw_historic.models.user', 'App\Models\User'), 'user_id');
    }



}
