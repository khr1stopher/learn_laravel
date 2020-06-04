@extends('plantilla')

@section('seccion')
<div class="display-1">
    Notas
</div>
        
    @if(session('mensaje'))
    <div class="alert alert-success">   
        {{ session('mensaje') }}
    </div>
    @endif
    <form action="{{ route('notas.crear') }}" method="POST">
        <h4 class="text-center">add note</h4>
        @csrf
        <input type="text" name="nombre" placeholder="titulo" class="form-control mb-2">
        <input type="text" name="description" placeholder="description" class="form-control mb-2">
        <button type="submit" class="btn btn-primary my-auto align-center btn-block block">  
            add
        </button>
    </form>

<table class="table">
    <thead>
        <tr>
            <th scope="col">#id</th>
            <th scope="col">Nota</th>
            <th scope="col">Description</th>
        </tr>
    </thead>
    <tbody>
        @foreach($notas as $nota)
            <tr>
                <th scope="row">{{ $nota->id }}</th>
                <td>
                    <a href="{{ route('notas.detalle',$nota)}}">
                        {{ $nota->nombre }}
                    </a>
                </td>
                <td>{{ $nota->description }}</td>
            </tr>
        @endforeach()
    </tbody>
</table>
@endsection