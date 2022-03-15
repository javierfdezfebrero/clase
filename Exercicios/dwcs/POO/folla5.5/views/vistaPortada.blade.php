@extends('plantillas.plantilla1')
@section('titulo')
{{$titulo}}
@endsection
@section('encabezado')
{{$encabezado}}
@endsection
@section('contenido')
@foreach($array as $item)
<form method="POST" action="../public/portadas.php">
@if($item[0]=="Productos")
    <label for="">
        {{ $label }}
    </label>
    <input type="text" name="nomeProducto">

@endif

@if($item[0]=="Familias")
    <label for="">
        Indica unha familia para buscar
    </label>
    
    <select name="familia" id="">
        
        @foreach ($familiasArray as $familia)
        <option value="{{ $familia->cod  }}">{{ $familia->nombre }}</option>
        @endforeach
    </select>

@endif

<button type="submit" name="{{ $item[0] }}">{{ $item[0] }}</button>
   



</form>
@endforeach

@endsection