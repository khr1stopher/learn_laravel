@extends('plantilla')

@section('seccion')
<div class="display-1">
    Notas
</div>
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