@extends('app')

@section('content')
    <div class="div-form-container">
        <form action="{{ route('todos-update', ['id' => $todo->id]) }}" method="POST">
            @method('PATCH')
            @csrf
            @if (session('success'))
            <h6 class="">{{ session('success') }}</h6> 
            @endif

            @error (session('success'))
            <h6 class="">{{$message}}</h6>   
            @enderror

            <div class="text1">
            <label for="title">Tarea</label>
            <input type="text" name="title" value="{{$todo->title}}">
            </div>
            <button type="submit">Actualizar</button>
        </form>

@endsection