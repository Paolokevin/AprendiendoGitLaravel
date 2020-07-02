@extends('layout')

@section('title', 'lista Portafolio')

@section('content')
    <div class="container">
        @if ($portfolio->isEmpty())
        <div>No hay Mensajes</div>
         @else
        <table class="table">
            <thead>
                <th scope="col">Id Tiulo</th>
                <th scope="col">Titulo</th>
                <th scope="col">Descripción</th>    
            </thead>
            <tbody>
                @foreach ($portfolio as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{!! $item->title !!}</td>
                    <td>{!! $item->description !!}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @endif
        {{ $portfolio->links() }}
    </div>
@endsection
