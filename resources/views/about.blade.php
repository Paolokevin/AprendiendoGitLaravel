@extends('layout')

@section('title', 'About')


@section('content')
    <h1>Welcome About</h1>

    <ul>
        @if ($about)
            @foreach ($about as $aboutItem)
                <li>{{ $aboutItem['item'] }}</li>
            @endforeach
        @else 
            <li>No hay portafolios para mostrar</li>
        @endif
    </ul>
@endsection