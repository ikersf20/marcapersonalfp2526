@extends('layouts.master')

@section('content')

    Vista detalle proyecto {{$id}}


    <div class="row m-4">

        <div class="col-sm-4">

            <a href="#" class="image featured"><img src="{{ asset('/images/mp-logo.png') }}" alt="" style="width: 100px" /></a>

        </div>
        <div class="col-sm-8">

            {{-- TODO: Datos del proyecto --}}
            <strong>Dominio: </strong>{{$proyecto['dominio']}} <br>
            <strong>Nombre: </strong>{{$proyecto['nombre']}} <br>
            <strong>Fecha de inicio: </strong>{{$proyecto['metadatos']['fecha_inicio']}} <br>
            <strong>Fecha de fin: </strong>{{$proyecto['metadatos']['fecha_fin']}} <br>
            <strong>Calificación: </strong>{{$proyecto['metadatos']['calificacion']}} <br>

            @if ($proyecto['metadatos']['calificacion'] >= 5)
                <strong>Estado: </strong>Proyecto probado <br><br>

                <button style="background-color: red">Suspender proyecto</button>


            @else
                <strong>Estado: </strong>Proyecto suspenso<br><br>
                <button style="background-color: aquamarine">Aprobar proyecto</button>

            @endif
            <br><br>

            <a href="{{ action([App\Http\Controllers\ProyectosController::class, 'getEdit'],['id' => $id]) }}" class="button alt">Editar proyecto</a>

            <a href="{{ action([App\Http\Controllers\ProyectosController::class, 'getIndex']) }}" class="button alt">Volver al listado</a>
        </div>
    </div>

@stop

