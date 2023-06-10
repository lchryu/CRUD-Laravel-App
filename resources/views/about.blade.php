@extends('layouts.app')
@section('content')
    <h1>This is About Page, with shared Header, Footer</h1>
    <h3>x = {{ $x = 10 }}</h3>
    @if($x > 2)
        <h3>x is greater than 2</h3>
    @elseif($x < 2)
        <h3>x is less than 2</h3>
    @else
        <h3>x is equal 2</h3>
    @endif


{{----}}
    @empty($age)
        <h3>Age not empty</h3>
    @endempty
    <h3 style="display: none">{{ $i = 0 }}</h3>
    @while($i < 5)
        <h3 style="color: salmon"> i = {{ $i++ }}</h3>
    @endwhile
    @foreach($names as $name)
        <h3 style="color: green">{{ $name }}</h3>
    @endforeach
@endsection
