@extends('adminlte::page')

@section('title', 'CARDANSEL - BLOG')

@section('content_header')
    <a class="btn btn-secondary btn-sm float-right" href="{{route('admin.posts.create')}}">Crear Nuevo Post</a>
    <h1>Listado de Post</h1>
@stop

@section('content')
    @livewire('admin.posts-index')
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop