@extends('templates/master')
@section('title', 'm o b i l i • Mi cuenta')

@section('breadcrumb')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="products">Mi cuenta</a>
    </li>
    <li class="breadcrumb-item">
        <a href="products/create">Agregar Producto</a>
    </li>
    <li class="breadcrumb-item active">Producto Cargado</li>
</ol>
@endsection


@section('content')

@if (session()->has('success'))
{{ session()->get('success') }}
@endif

<div class="container">
    <section class="micuenta">
        <div>
            <h1 class="alt-title">MI CUENTA</h1>
        </div>
        <div class="container-content flex">
            <div class="container-avatar">
                @if (session('status'))
                <div class="alert alert-info alert-success">
                    {{ session('status') }}
                </div>
                @endif  
                @if ($datos->avatar)
                    <img class="avatar" src="{{asset($datos->avatar)}}" alt="Avatar usuario">                    
                @else
                <i class="far fa-smile"></i>
                @endif
            </div>
            <div class="container-copy left">
                <p>Email: {{$datos->email}}</p>
                <p>Nombre y apellido: {{$datos->first_name}} {{$datos->last_name}}</p>
                <p>Dni: {{$datos->dni}}</p>
                <p>Teléfono: {{$datos->phone}}</p>
                <p>Fecha de nacimiento: {{$datos->birthday}}</p>
            </div>
        </div>
        <div class="container-button">
            <form method="get" action="{{route('profile.edit')}}" novalidate>
                <button type="submit" class="btn btn-success" value="submit">Modificar mis datos</button>
            </form>
        </div>
    </section>
</div>            
@endsection
