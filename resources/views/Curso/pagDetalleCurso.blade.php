@extends('pagPlantilla')

@section('titulo')
    <h1 class="display-4">Pagina de lista </h1>
@endsection()

@section('seccion')
    <h3>DETALLE DEL CURSO</h3>

    <p> Id:                     {{ $xDetCurso->id }} </p>
    <p> Codigo:                 {{ $xDetCurso->codCur }} </p>
    <p> Nombre del curso:       {{ $xDetCurso->denCur }} </p>
    <p> Horas del curso:        {{ $xDetCurso->hrsCur }} </p>
    <p> Creditos del curso:     {{ $xDetCurso->creCur }} </p>
    <p> Plan de estudios:       {{ $xDetCurso->plaCur }} </p>
    <p> Tipo de curso:          {{ $xDetCurso->tipCur }} </p>
    <p> Estado de curso:        {{ $xDetCurso->estCur }} </p>

@endsection()