@extends('layout')

@section('title','Persona')

@section('content')
    <div class="container">
        <h1 class="text-center text-primary">Modulo de Registro de Perosonas</h1>
        <div class="row">
            <div class="card col-md-6 mx-auto">
                <div class="card-body">
                    <form action="{{ route('formPersona.registrarPersonas') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" name="idPersona" class="form-control" placeholder="Id de la persona" >
                        </div>
                        <div class="form-group">
                            <input type="text" name="carrera" class="form-control" placeholder="Carrera">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="form-control btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection