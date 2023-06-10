@extends('layouts.app')

@section('content')
    <h1>This is Foods CREATE</h1>
    <form action="/foods" method="post">
        @csrf
        <input
            class="form-control"
            name="name"
            placeholder="Enter food's name"
            type="text">
        <input
            class="form-control"
            type="text"
            name="description"
            placeholder="Enter food's description"
        >
        <input
            class="form-control"
            type="text"
            name="count"
            placeholder="Enter food's count"
        >
        <button class="btn btn-success"
                type="submit">
            Submit
        </button>
    </form>
@endsection
