<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sales;
use Inertia\Inertia;

class SalesController extends Controller
{
    public function index()
    {
        $sales = Sales::with('client')->take(10)->get();

        return Inertia::render('Sales/Index', [
            'sales' => $sales,
        ]);
    }
}
