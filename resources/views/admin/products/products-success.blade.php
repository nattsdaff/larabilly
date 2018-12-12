@extends('admin.master')
@section('title', 'Mobili - ¡Producto Cargado!')

@section('breadcrumb')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="products">Productos</a>
    </li>
    <li class="breadcrumb-item">
        <a href="products/create">Agregar Producto</a>
    </li>
    <li class="breadcrumb-item active">Producto Cargado</li>
</ol>
@endsection
@section('content')
<div class="row">
    <div class="container">
        <div class="alert alert-success" role="alert">
            <span>¡El producto fue cargado con éxito!</span>
        </div>
        <a href="products/create" class="btn btn-success"><i class="fas fa-plus"></i> Agregar otro producto</a>
        <a href="products" class="btn btn-primary">Ir al listado <i class="fas fa-arrow-right"></i></a>
    </div>
</div>

@endsection