@extends('template')

@section('common_blade')
    <h1>Editar oficio {{ $oficio->id }}</h1>
    @if (session('message_update'))
        <div class="alert alert-success">
          {{ session('message_update') }}
        </div>
    @endif
    <form action="{{ route('routeOficioUpdate', $oficio->id) }}" method="POST" class="p-2">
        @method('PUT')
        @csrf

        @error('name')
            <div class="alert alert-danger">
              The name is required
            </div> 
        @enderror

        @error('description')
            <div class="alert alert-danger">
              The description is required
            </div> 
        @enderror

        <input type="text"
        name="name" 
        placeholder="Name" 
        class="form-control mb-2" 
        value="{{ $oficio->name }}">

        <input type="text" 
        name="description" 
        placeholder="Description" 
        class="form-control mb-2" 
        value="{{ $oficio->description }}">

        <button class="btn btn-warning btn-block" type="submit">Update</button>

      </form>
@endsection