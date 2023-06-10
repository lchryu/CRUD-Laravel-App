<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 1. Truy van truc tiep
//        $posts = DB::select("SELECT * FROM posts WHERE id = :id;",
//            [
//                'id' => 3
//            ]);

        // 2: Query builder
        $posts = DB::table("posts")
                ->where('id','=','3')
                ->delete();
//                ->insert([
//                   'title'=>'haha',
//                    'body'=>'A new post ha ha ha'
//                ]);
//            ->where("id", 3)
//            ->select('body')
//            ->get();

        dd($posts);

//        return view('posts.index');
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
