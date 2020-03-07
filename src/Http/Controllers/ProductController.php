<?php

namespace Saheed\AvailabilityCheck\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Saheed\AvailabilityCheck\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        return Product::filter($request)->get();
    }
}