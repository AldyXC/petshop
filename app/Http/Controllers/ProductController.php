<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('backend.product.index');
    }

    public function create()
    {
        return view('backend.product.create');
    }
}
