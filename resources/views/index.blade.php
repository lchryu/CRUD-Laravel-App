@extends('layouts.app')
@section('content')
    <h1>PageController.index, with shared Header, Footer</h1>
    {{ print_r(asset('storage/meowmeow.png')) }} <br>
    <img
        src="{{ asset('storage/meowmeow.png') }}"
        width="100"
        height="100"
        alt="">
@endsection

