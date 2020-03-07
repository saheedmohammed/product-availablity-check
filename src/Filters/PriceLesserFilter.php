<?php

namespace Saheed\AvailabilityCheck\Filters;

class PriceLesserFilter
{
    public function filter($builder, $value)
    {
     	return $builder->where('price','<',$value);        
    }
}