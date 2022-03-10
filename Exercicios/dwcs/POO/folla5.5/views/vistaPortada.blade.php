@extends('plantillas.plantilla1')
@section('titulo')
{{$titulo}}
@endsection
@section('encabezado')
{{$encabezado}}
@endsection
@section('contenido')
@foreach($array as $item)
@if($item[0]=="Productos")
<label for="">
    {{ $label }}
</label>
<input type="text" name="nomeProducto">

@endif

<a href="{{ $item[1] }}"><button>{{ $item[0] }} </button>
   
</a>

@endforeach

@endsection