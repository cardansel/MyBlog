@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

    @can('admin.tags.create')
        <a class="btn btn-secondary btn-sm float-right" href="{{route('admin.tags.create')}}">Crear Nuevo Tag</a>    
    @endcan
    <h1>Listado de Etiquetas</h1>
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
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tags as $tag)
                        <tr>
                            <td>{{ $tag->id }}</td>
                            <td>{{ $tag->name }}</td>
                            <td width="10px">
                                
                                @can('admin.tags.edit')
                                    <a href="{{ route('admin.tags.edit',$tag) }}" class="btn btn-md btn-outline-warning">Editar</a>
                                @endcan
                            </td>
                            <td width="10px">
                                @can('admin.tags.delete')
                                    <form action="{{ route('admin.tags.destroy',$tag) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-md btn-outline-danger" type="submit">Eliminar</button>
                                    </form>
                                @endcan
                            </td>
                        </tr>
                        
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

