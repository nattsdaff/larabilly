@extends('templates/master')

@section('title', 'm o b i l i • Resultados de Búsqueda')

@section('content')
    <div class="container">
        @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
                <p style="color:red;">{{$error}}</p>
            @endforeach
        @endif
        <h2>Resultados de Búsqueda</h2>
        <p>{{$products->count()}} resultado(s) para '{{request()->input('query')}}'</p>

        @foreach ($products as $product)
            <p>{{$product->name}}</p>
        @endforeach
    </div>
    
@endsection