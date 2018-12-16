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
    <div class="top-info">
        <h2 class="order-title">Detalles de la Orden # {{$order->id}}</h2>
        <h3 class="order-date"><span>Orden realizada: </span>{{ $date->format('l d, F Y') }}</h3>
    </div>

    <p class="status alert 
    <?php switch($order->status) {
            case 'Pendiente':
                echo 'alert-warning';
                break;
            case 'Cancelada':
                echo 'alert-danger';
                break;
            case 'Pago Recibido':
                echo 'alert-success';
                break;
        }
    ?>">
        <strong>Estado:</strong> {{$order->status}}
    </p>

    <div class="order-details">
        <div class="detail">
            <p><span>Local:</span> {{$order->store_address}}</p>
        </div>
        <div class="detail">
            <p><span>Forma de Pago:</span> {{$order->payment}}</p>
        </div>
        <div class="detail">
            <p><span>Dni:</span> {{$client->dni}}</p>
        </div>
        <div class="detail">
            <p><span>Cliente:</span> {{$client->first_name}} {{$client->last_name}}</p>
        </div>
        <div class="detail">
            <p><span>Email:</span> {{$client->email}}</p>
        </div>
        <div class="detail">
            <p><span>Teléfono:</span> {{$client->phone}}</p>
        </div>
    </div>
    <p>Total: ${{$order->total}}</p>

    @foreach ($items as $item)
        <p>{{$item->name}}</p>
        <p>${{$item->price}}</p>
        <p>{{$item->quantity}}</p>
    @endforeach

    <form action="{{ route('sales.update', ['id'=>$order->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <select name="status">
            <option value="" selected disabled>Cambiar Estado de la Orden</option>
            @switch($order->status)
                @case('Pendiente')
                    <option value="Cancelada">Cancelada</option>
                    <option value="Pago Recibido">Pago Recibido</option>
                    @break
                @case('Cancelada')
                    <option value="Pago Recibido">Pago Recibido</option>
                    <option value="Pendiente">Pendiente</option>
                    @break
                @case('Pago Recibido')
                    <option value="Cancelada">Cancelada</option>
                    <option value="Pendiente">Pendiente</option>
                    @break
                @default
            @endswitch
        </select>
        <br>
        <input type="submit" value="Cambiar" class="btn btn-primary">
    </form>
@endsection