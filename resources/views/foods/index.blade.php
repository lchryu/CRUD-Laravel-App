@extends('layouts.app')
@section('content')
    <h1>This is Foods Page</h1>
    <a href="foods/create"
       role="button"
       class="btn btn-success mb-2">
        Add a new Food
    </a>
    @foreach($foods as $food)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            <div class="ms-2 me-auto">
                <div class="fw-bold">
                    {{ $food->name }}
                </div>
                {{ $food->description }}
            </div>
            <span class="badge bg-primary rounded-pill">{{ $food->count }}</span>
            <a class="btn btn-primary me-2 ms-2" href="foods/{{ $food->id }}/edit">
                Edit
            </a>
            {{-- Delete a food --}}
            <form action="/foods/{{ $food->id }}" method="post">
                @csrf
                @method('delete')
                <button type="submit"
                        class="btn btn-danger">
                    Delete
                </button>
            </form>
        </li>
    @endforeach
@endsection

