@extends('template')

@section('common_blade')
    <div class="container">
        <h1 class="display-4">Oficios</h1>
        @if(session('message'))
        <div class="alert alert-success">
          {{ session('message') }}
        </div>
        @endif
        <form action="{{ route('add_oficio') }}" method="POST">
          @csrf
          <input type="text" name="name" placeholder="Name" class="form-control mb-2">
          <input type="text" name="description" placeholder="Description" class="form-control mb-2">
          <button class="btn btn-primary btn-block" type="submit">Agregar</button>
        </form>

        <table class="table ">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#id</th>
                <th scope="col">Name</th>
                <th scope="col">Description</th>
                <th scope="col">Handle</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($oficios as $item)
              <tr>
                <th scope="row">{{ $item->id }}</th>
                <td>
                    <a href="{{ route('oficio.details', $item) }}">
                        {{ $item->name }}
                    </a>
                </td>
                <td>{{ $item->description }}</td>
                <td>@mdo</td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@endsection