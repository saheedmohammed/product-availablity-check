<?php

namespace Saheed\AvailabilityCheck\Filters;

class ColorNotFilter
{
    public function filter($builder, $value)
    {
     	return $builder->where('color','!=',$value);        
    }
}