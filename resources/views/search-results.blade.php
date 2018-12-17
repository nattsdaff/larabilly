@extends('templates/master')

@section('title', 'm o b i l i • Resultados de Búsqueda')

@section('content')
    <div class="container">
        @if (count($errors) > 0)
            @foreach ($errors->all() as $error)
                <p style="color:red;">{{$error}}</p>
            @endforeach
        @endif
        <div class="search-results">
        <h2 class="alt-title">Resultados de Búsqueda</h2>
        <p class="subtitle">{{$products->count()}} resultado(s) para '{{request()->input('query')}}'</p>
        <div class="list">
            @foreach ($products as $product)
            <div class="item">
                <a href="{{route('shop.product', $product->slug)}}" class="alt-a">{{$product->name}}</a>
                <p>{{ str_limit($product->description, 180)}}</p>
            </div>
            @endforeach
        </div>
    </div>
</div>
    
@endsection