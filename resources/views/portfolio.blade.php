@extends('layout')

@section('title', 'portfolio')

@section('content')
    <h2 class="text-center py-3">We are in Porfolio</h2>
        @if ($errors->any())
            <div class="alert alert-danger text-center">
                @foreach ($errors->all() as $item)
                   <li>{{ $item }}</li> 
                @endforeach
            </div>
        @endif

        @if (session( 'mensage'))
            <div class="alert alert-success text-center">
                <p>{{ session('mensage') }}</p>
            </div>
        @endif

        <ul>
            @forelse ($portfolio as $item)
                <li>{{ $item->title}}</li>
            @empty
                <li>no hay portafolio</li>
            @endforelse
        </ul>

        {{ $portfolio->links() }}

        <form action="{{ route('portfolio') }}" method="POST">
            @csrf   
            <div class="card col-md-6 mx-auto">
                <div class="card-body">
                    <div class="form-group">
                        <input type="text" name="titulo"  placeholder="Titulo" class="form-control">
                        {{ $errors->first('autor') }}
                    </div>
                    <div class="form-group">
                        <input type="text" name="autor" placeholder="Autor" class="form-control">
                        {{ $errors->first('autor') }}
                    </div>
                    <div class="form-group">
                        <textarea name="mensaje" id="" cols="30" rows="4" placeholder="Mensaje..." class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Registrar" class="form-control btn btn-success">
                    </div>
                </div>
            </div>
        </form>

    
@endsection