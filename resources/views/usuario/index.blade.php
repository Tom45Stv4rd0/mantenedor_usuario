@extends('layouts.app')
@section('content')
<div class="container">
@if(Session::has('mensaje'))
{{ Session::get('mensaje') }}
@endif
<a href="{{ url('usuario/create') }}" class="btn btn-success">Registrar Nuevo Usuario</a>

<table class="table table-light">
    <thead class="thead-light">
        <tr>
            <th>#</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Password</th>
            <th>Rut</th>
            <th>Edad</th>
            <th>Cargo</th>
            <th>Fecha</th>
            <th>Acciones</th>

        </tr>
    </thead>
    <tbody>
        
        <tr>
            @foreach( $empleados as $empleado )
            <td>{{ $empleado->id}}</td>
            <td>{{ $empleado->nombre}}</td>
            <td>{{ $empleado->mail}}</td>
            <td>{{ $empleado->password}}</td>
            <td>{{ $empleado-> rut}}</td>
            <td>{{ $empleado->edad}}</td>
            <td>{{ $empleado->cargo}}</td>
            <td>{{ $empleado->fecha_ingreso}}</td>
            <td> 
                <a href="{{url('/usuario/'.$empleado->id.'/edit')}}" class="btn btn-warning">
                    Editar
                </a>| 
                <form action="{{ url('/usuario/'.$empleado->id ) }}" class="d-inline" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <input class="btn btn-danger" type="submit" onclick="return confirm('¿Quieres borrar el registro?')" value="Borar">
                </form>
            </td>
            
        </tr>
        @endforeach
        
    </tbody>
</table>
</div>
@endsection
