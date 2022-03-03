@extends('adminlte::page')

@section('title', 'title')

@section('content_header')
    <h1>Header</h1>
@stop

@section('content')
    <p>Welcome to the todos page.</p>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
