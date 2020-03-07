<?php

namespace Saheed\AvailabilityCheck\Filters;

class SpeedGreaterFilter
{
    public function filter($builder, $value)
    {
     	return $builder->where('speed','>',$value);        
    }
}