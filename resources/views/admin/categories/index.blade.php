@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    @can('admin.categories.create')
        <a class="btn btn-secondary btn-sm float-right" href="{{route('admin.categories.create')}}">Crear Nueva Categoria</a>    
    @endcan
    
    <h1>Listado de Categorias</h1>
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
                    @foreach ($categories as $category)
                        <tr>
                            <td>{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>

                            
                              <td width="10px">
                                    @can('admin.categories.edit')
                                    <a href="{{ route('admin.categories.edit',$category) }}" class="btn btn-md btn-outline-warning">Editar</a>
                                    @endcan
                                </td>
                           
                                <td width="10px">
                                    @can('admin.categories.delete')
                                        <form action="{{ route('admin.categories.destroy',$category) }}" method="post">
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

