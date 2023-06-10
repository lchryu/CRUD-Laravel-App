<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // how to pass data to view
        $title = 'Laravel course from Luong Chung Hoi';
        $x = 1; $y = 2;
//        return view('products.index', compact('title', 'x', 'y'));
        $name = 'LCH';
//        return view('products.index')->with('name', $name);
//        with method can only send 1 parameter

//        cách 3: Send an associative array
        $myPhone = [
            'name' => 'Iphone 14',
            'year' => 2022,
            'isFavorite' => true
        ];
//        return view('products.index')->with('myPhone', $myPhone);
//        return view('products.index', [
//            'myPhone' => $myPhone
//        ]);
        print_r(route('products'));
        return view('products.index');
    }
    public function detail($productName, $id) {
//        $phones = [
//            'iphone 16' => 'iphone 16',
//            'samsung'   => 'samsung'
//        ];
//        return view('products.index', [
//            'product' => $phones[$productName] ?? 'Unknown Product'
//        ]);
        return "Product'Name = $productName <br> Product's id = $id";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
