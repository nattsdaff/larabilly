@extends('admin.master')
@section('title', 'Mobili - ¡Administrador Creada!')

@section('breadcrumb')
<!-- Breadcrumbs-->
<ol class="breadcrumb">
    <li class="breadcrumb-item">
        <a href="admins">Administradores</a>
    </li>
    <li class="breadcrumb-item">
        <a href="create">Agregar Administrador</a>
    </li>
    <li class="breadcrumb-item active">Administrador Creado</li>
</ol>
@endsection
@section('content')
<div class="row">
    <div class="container">
        <div class="alert alert-success" role="alert">
            <span>¡El administrador fue creado con éxito!</span>
        </div>
        <a href="create" class="btn btn-success"><i class="fas fa-plus"></i>Agregar otro Administrador</a>
        <a href="admins" class="btn btn-primary">Ir al listado <i class="fas fa-arrow-right"></i></a>
    </div>
</div>

@endsection