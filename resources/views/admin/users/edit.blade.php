@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar Usuario: {{ $user->email }}</h1>
    <strong>Asignacion de Rol</strong>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>INFORMACI&Oacute;N!</strong>  {{ session('info') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif


    <div class="card">
        <div class="card-body">
            <p class="h5">Nombre:</p>
            <p class="form-control"><b>{{ $user->name }}</b></p>

            <h2 class="h5">Listado de Roles</h2>

            {!! Form::model($user,['route'=> ['admin.users.update',$user],'method'=>'put']) !!}
                @foreach($roles as $role)
                    <div>
                        <label>
                            {!! Form::checkbox('roles[]',$role->id,null,['class'=>'mr-1']) !!}
                            {{ $role->name }}
                        </label>
                    </div>
                @endforeach

                {!! Form::submit('Asignar Rol',['class'=>'btn btn-primary mt-2'])!!}
            {!! Form::close()!!}
            
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop