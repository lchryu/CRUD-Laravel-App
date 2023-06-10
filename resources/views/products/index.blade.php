<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        h3{
            color:red;
        }

    </style>
</head>
<body>
    <h1>Index function of ProductsController</h1>
{{--    @foreach($products as $item)--}}
{{--        <h3>{{ $item }}</h3>--}}
{{--    @endforeach--}}
{{--    <h3>{{ $product }}</h3>--}}
    <a href="{{ route("products") }}">Link to products</a>
</body>
</html>
