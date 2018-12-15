@extends('admin.master')
@section('title', 'Mobili - Ventas')

@section('breadcrumb')
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{ route('sales.index') }}">Ventas</a></li>
        <li class="breadcrumb-item active">Orden nº {{$order->id}}</li>
    </ol>
@endsection
@section('content')
    <h2>Detalles de la Orden</h2>
    <p>#ID: {{$order->id}}</p>
    <p>Fecha: {{$order->created_at}}</p>
    <p>Local: {{$order->store_address}}</p>
    <p>Forma de Pago: {{$order->payment}}</p>
    <p>Estado: {{$order->status}}</p>
    <p>Total: ${{$order->total}}</p>

    @foreach ($items as $item)
        <p>{{$item->name}}</p>
        <p>${{$item->price}}</p>
        <p>{{$item->quantity}}</p>
    @endforeach

    <p>{{$client->email}}</p>
@endsection