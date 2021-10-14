@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'admin.posts.store','autocomplete'=>'off']) !!}

            <div class="form-group">
                {!! Form::label('name') !!}
                {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Ingrese el nombre del Post']) !!}

            </div>

            <div class="form-group">
                {!! Form::label('slug') !!}
                {!! Form::text('slug', null, ['class'=>'form-control','placeholder'=>'Ingrese el slug del Post','readonly']) !!}
                
            </div>

            <div class="form-group">
                {!! Form::label('category_id') !!}
                {!! Form::select('category_id', null, ['class'=>'form-control']) !!}
            </div>

            <div class="form-group">
                <p class="font-weight-bold">Etiquetas</p>

              
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script src="{{ asset('vendor/jQuery-Plugin-stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>

    <script>
        $(document).ready( function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>
@endsection