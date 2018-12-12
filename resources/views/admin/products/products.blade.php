@extends('admin.master')
@section('title', 'Mobili - Productos')

@section('breadcrumb')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item active">Productos</li>
</ol>
@endsection
@section('content')

@if (session('status'))
    <div class="alert alert-info">
        {{ session('status') }}
    </div>
@endif  
<div class="row">
    @foreach ($products as $product)
    <div class="col-sm-6 col-lg-4 col-xl-3">
        <div class="card">
            <img class="card-img-top" src="{{asset($product->picture)}}" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">{{$product->name}}</h4>
                <h5 class="card-subtitle mb-2 text-muted">{{$product->category->name}}</h5>
                <h6 class="card-subtitle my-2">$ {{$product->price}}</h6>
                <p class="card-text">{{substr($product->description, 0, 100)}}...</p>
            </div>
            <div class="acciones" style="border-top: 1px solid rgba(0,0,0,.125);display: flex;justify-content: space-between;padding: 0.5rem 1.25rem;">
                <a href="products/{{$product->id}}/edit" class="btn btn-warning"><i class="far fa-edit"></i> Editar</a>
                <form action="{{route('product.destroy', ['id' => $product->id ])}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"><i class="far fa-trash-alt"></i> Borrar</button>
                </form>
            </div>
            <div class="card-footer">
                <small class="text-muted">Creado: {{$product->created_at}}</small>
            </div>
        </div>
        {{-- Cierra .card --}}
    </div>
    {{-- Cierra .col-md-3 --}}
    @endforeach
</div>
{{-- Cierra .row --}}

@endsection