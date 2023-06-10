@extends('layouts.app')

@section('content')
    <h1>Update a food</h1>
    <form action="/foods/{{ $food->id }}" method="post">
        @csrf
        @method('PUT')
        <input
            class="form-control"
            name="name"
            placeholder="Enter food's name"
            type="text"
            value="{{ $food->name }}">
        <input
            class="form-control"
            type="text"
            name="description"
            placeholder="Enter food's description"
            value="{{ $food->description }}"
        >
        <input
            class="form-control"
            type="text"
            name="count"
            placeholder="Enter food's count"
            value="{{ $food->count }}"
        >
        <button class="btn btn-success btn-lg"
                type="submit">
            Update Food
        </button>
    </form>
@endsection
