{{-- resources/views/superheroes/show.blade.php --}}
@extends('layouts.app')

@section('content')
    <h1>{{ $superhero->superhero_name }}</h1>
    <p><strong>Real Name:</strong> {{ $superhero->real_name }}</p>
    <p><strong>Additional Info:</strong> {{ $superhero->super_powers }}</p>
    <a href="{{ route('superheroes.index') }}" class="btn btn-secondary">Back to List</a>
@endsection
