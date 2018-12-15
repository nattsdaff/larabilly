@extends('admin.master')
@section('title', 'Mobili - ¡Usuario Creado!')

@section('breadcrumb')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="usuarios">Usuarios</a>
    </li>
    <li class="breadcrumb-item">
        <a href="create">Agregar Usuario</a>
    </li>
    <li class="breadcrumb-item active">Usuario Creado</li>
</ol>
@endsection
@section('content')
<div class="row">
    <div class="container">
        <div class="alert alert-success" role="alert">
            <span>¡El usuario fue creado con éxito!</span>
        </div>
        <a href="users/create" class="btn btn-success"><i class="fas fa-plus"></i>Agregar otro Usuario</a>
        <a href="users" class="btn btn-primary">Ir al listado <i class="fas fa-arrow-right"></i></a>
    </div>
</div>

@endsection