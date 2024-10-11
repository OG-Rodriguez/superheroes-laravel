@extends('layouts.app')

@section('content')
    <h1>Add New Superhero</h1>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('superheroes.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="real_name">Real Name</label>
            <input type="text" class="form-control" id="real_name" name="real_name" required>
        </div>
        <div class="form-group">
            <label for="superhero_name">Superhero Name</label>
            <input type="text" class="form-control" id="superhero_name" name="superhero_name" required>
        </div>
        <div class="form-group">
            <label for="super_powers">Super Powers</label>
            <textarea class="form-control" id="super_powers" name="super_powers"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection


