<?php

namespace ConfrariaWeb\Historic\Traits;

use Illuminate\Support\Facades\Auth;
use ConfrariaWeb\Historic\Models\Historic;

trait HistoricTrait
{

    public function histories()
    {
        return $this->morphMany(Historic::class, 'historicable');
    }

    public function addHistoric($description = NULL){
        $historic = new Historic;
        $change = '';
        foreach($this->changes as $change_k => $change_v){
            $change .= '[' . $change_k . ': ' . $change_v . '] ';
        }
        $historic->user_id = Auth::id();
        $historic->description = $description . ' ' . $change;
        $this->histories()->save($historic);
    }

}
