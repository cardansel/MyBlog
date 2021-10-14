@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar la Etiqueta: <span><b>{{ $tag->name }}</b></span></h1>
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
        {!! Form::model($tag,['route'=>['admin.tags.update',$tag],'method'=>'put']) !!}

        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Ingrese el Nombre de la Etiqueta']) !!}

            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('slug', 'Slug') !!}
            {!! Form::text('slug', null, ['class'=>'form-control','placeholder'=>'Ingrese el slug de la Etiqueta','readonly']) !!}
            
            @error('slug')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-group">
            {!! Form::label('color', 'Color de la Etiqueta') !!}
            {!! Form::select('color', $colors, null, ['class'=>'form-control']) !!}
            
            @error('color')
                <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>

        <div class="form-row">
            <div class="form-group col-md-4">
                   {!! Form::submit('Actualizar', ['class'=>'btn btn-block btn-outline-success']) !!} 
            </div>
            <div class="form-group col-md-4">
                {{-- <button class="btn btn-block btn-outline-danger" type="reset">Cancelar</button> --}}
                
            </div>
        </div>

        {!! Form::close() !!}
    </div>
</div>
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

    <script>
        $().alert('dispose');
    </script>
@endsection
