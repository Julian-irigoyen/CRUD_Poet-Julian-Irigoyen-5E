@extends('layouts.master')
@if(isset($user) and is_object($user))
    @php
    $title = 'Modificación de un Poeta';
    $boton = 'Actualizar';
    $id = $user->idPoeta;
    $nombre = $user->nombre;
    $snombre = $user->snombre;
    $direccion = $user->direccion;
    $cp = $user->cp;
    $tel = $user->tel;
    @endphp
@else
    @php
        $title = 'Alta de un Poeta';
        $boton = 'Dar de alta';
        $id = '';
        $nombre = '';
        $snombre = '';
        $direccion = '';
        $cp = '';
        $tel = '';
    @endphp
@endif


@section('title','Mostrar usuarios')
@section('header')
    <h1>@parent {{$title}}</h1>
@stop
@section('navbar')

@stop
@section('content')
    <form action="{{isset($user) ? action('CRUD@update') :action('CRUD@store')}}" method="POST">
        {{csrf_field()}}
        @if(isset($user) and is_object($user))
            <input type="hidden" name="id" value="{{$id}}"/>
        @endif
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" value="{{$nombre}}">
        <br>
        <label for="snombre">Segundo nombre</label>
        <input type="text" name="snombre" value="{{$snombre}}">
        <br>
        <label for="direccion">Dirección</label>
        <input type="text" name="direccion" value="{{$direccion}}">
        <br>
        <label for="cp">Codigo Postal</label>
        <input type="text" name="cp" value="{{$cp}}">
        <br>
        <label for="tel">Telefono</label>
        <input type="text" name="tel" value="{{$tel}}">
        <br>
        <input type="submit" value="{{$boton}}">
    </form>
@stop
@section('footer')
    <p>Sticker</p>
    <img src="/images/Sticker.png" alt="Sticker">
    Derechos reservados {{date('Y')}}
@stop