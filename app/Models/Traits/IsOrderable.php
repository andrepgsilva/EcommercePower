<?php

namespace App\Models\Traits;

use Illuminate\Database\Eloquent\Builder;

trait IsOrderable
{
    public function scopeOrdered(Builder $buider, $direction = 'asc')
    {
        $buider->orderBy('order', $direction);
    }
}
