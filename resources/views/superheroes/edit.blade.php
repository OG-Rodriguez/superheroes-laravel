@extends('layouts.app')

@section('content')
    <h1>Edit Superhero</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('superheroes.update', $superhero->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="real_name">Real Name</label>
            <input type="text" class="form-control" id="real_name" name="real_name" value="{{ $superhero->real_name }}" required>
        </div>
        <div class="form-group">
            <label for="superhero_name">Superhero Name</label>
            <input type="text" class="form-control" id="superhero_name" name="superhero_name" value="{{ $superhero->superhero_name }}" required>
        </div>
        <div class="form-group">
            <label for="super_powers">Additional Info</label>
            <textarea class="form-control" id="super_powers" name="super_powers">{{ $superhero->super_powers }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection

