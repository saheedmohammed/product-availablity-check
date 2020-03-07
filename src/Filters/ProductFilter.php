<?php

namespace Saheed\AvailabilityCheck\Filters;

use Saheed\AvailabilityCheck\Filters\AbstractFilter;
use Illuminate\Database\Eloquent\Builder;

class ProductFilter extends AbstractFilter
{
    protected $filters = [
        'color_not' => ColorNotFilter::class,
        'price_less_than' => PriceLesserFilter::class,
        'speed_greater_than' => SpeedGreaterFilter::class,
    ];
}