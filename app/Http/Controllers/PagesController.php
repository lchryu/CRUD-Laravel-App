<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about()
    {
        $name = 'LCH';
        $names = [
            'Hoang',
            'David',
            'John',
            'Taylor',
            'Micheal'
        ];
        return view('about', [
            'names' => $names
        ]);
    }
}
