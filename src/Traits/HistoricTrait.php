<?php

namespace ConfrariaWeb\Historic\Traits;

use ConfrariaWeb\Historic\Models\Historic;

trait HistoricTrait
{

    public function histories()
    {
        return $this->morphMany(Historic::class, 'historicable');
    }

}
