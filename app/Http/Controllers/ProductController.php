<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        return Product::query()
            ->with(['category'])
            ->priceGreaterThan($request->price_greater_than ?? 0)
            ->category($request->category ?? null)
            ->orderBy('price', $request->sort ?? 'asc')
            ->paginate(10)
            ->withQueryString();
    }
}
