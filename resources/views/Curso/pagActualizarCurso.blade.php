@extends('pagPlantilla')

@section('titulo')
    <h1 class="display-4">Pagina de Actualizar </h1>
@endsection()

@section('seccion')
    
    @if(session('msj'))
        <div class="alert alert-success">
            {{ session('msj') }}
        </div>
    @endif

    <h3>ACTUALIZAR DATOS DEL CURSO</h3>

    <form action="{{ route('Curso.xUpdateCurso', $xActCurso->id)}}" method="post" class="d-grid gap-2">
    @method('PUT')    
    @csrf

        @error('codCur')
            <div class="alert alert-danger">
                El código es requerido
            </div>
        @enderror

        @error('denCur')
            <div class="alert alert-danger">
                El nombre es requerido 
            </div>
        @enderror

        @if(true)
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                SE <strong>REQUIERE</strong> INGRESAR DATOS 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <input type="text" name="codCur" placeholder="Codigo" value="{{$xActCurso->codCur}}" class="form-control mb-2">
        <input type="text" name="denCur" placeholder="Nombre del curso" value="{{$xActCurso->denCur}}" class="form-control mb-2">
        <select name="hrsCur" class="form-control mb-2">
            <option value="">Seleccione...</option>
            @for($i=1; $i < 7; $i++)
                <option value="{{$i}}" @if ($xActCurso->hrsCur == $i) {{"SELECTED"}} @endif >Horas del curso {{$i}}</option>
            @endfor
        </select>
        <select name="creCur" class="form-control mb-2">
            <option value="">Seleccione...</option>
            @for($i=1; $i < 7; $i++)
                <option value="{{$i}}" @if ($xActCurso->creCur == $i) {{"SELECTED"}} @endif >Creditos del curso {{$i}}</option>
            @endfor
        </select>
        <input type="text" name="plaCur" placeholder="Año del plan de estudios" value="{{$xActCurso->plaCur}}" class="form-control mb-2">
        
        <select name="tipCur" class="form-control mb-2">
            <option value="">Seleccione...</option>
            <option value="1" @if ($xActCurso->tipCur ==1) {{"SELECTED"}} @endif>Transversal(1)</option>
            <option value="2"@if ($xActCurso->tipCur ==2) {{"SELECTED"}} @endif>Especialidad(2)</option>
            </select>
        
        <select name="estCur" class="form-control mb-2">
            <option value="">Seleccione...</option>
            <option value="1" @if ($xActCurso->estCur ==1) {{"SELECTED"}} @endif >Activo</option>
            <option value="0" @if ($xActCurso->estCur ==2) {{"SELECTED"}} @endif>Inactivo</option>
        </select>
        

        <button class="btn btn-warning" type="submit">ACTUALIZAR</button>
    </form>


@endsection()