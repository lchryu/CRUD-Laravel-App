<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class FoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $foods = Food::all();
//        dd($foods);
        return view('foods.index', [
            'foods' => $foods
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('foods.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
//        dd('this is store function');
//        $food = new Food();
//        $food->name = $request->input('name');
//        $food->count = $request->input('count');
//        $food->description = $request->input('description');

        $food = Food::create([
            'name' => $request->input('name'),
            'count' => $request->input('count'),
            'description' => $request->input('description'),
        ]);

        // save to Database
        $food->save();
        return redirect('foods');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // show ra chi tiet san pham
        // tam thoi chua lam vi da du crud
        // 2h16p20
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
//        dd($id);
        $food = Food::find($id);
//        dd($food);
        return view('foods.edit')->with('food', $food);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) {
        $food = Food::where('id', $id)
            ->update([
                'name' => $request->input('name'),
                'count' => $request->input('count'),
                'description' => $request->input('description')
            ]);

        return redirect('/foods');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id) {
        $food = Food::find($id);
        $food->delete();
        return redirect('/foods');
    }
}
