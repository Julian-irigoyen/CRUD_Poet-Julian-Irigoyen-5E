@extends('layouts.master')
@section('title','Insertar Usuarios')
@section('header')
    <h1>@parent Insertar Usuarios</h1>
@stop
@section('navbar')

@stop
@section('content')
    <div>
        <a href="{{action('CRUD@create')}}">Agregar un nuevo usuario</a>
    </div>
    <table class="table table-dark">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Segundo nombre</th>
            <th scope="col">Dirección</th>
            <th scope="col">Codigo Postal</th>
            <th scope="col">Telefono</th>
            <th scope="col">Actualizar</th>
            <th scope="col">Borrar</th>
        </tr>
        </thead>
        <tbody>
        @foreach($nombre as $user)
            <tr>
                <th scope="row">{{$user->idPoeta}}</th>
                <td>{{$user->nombre}}</td>
                <td>{{$user->snombre}}</td>
                <td>{{$user->direccion}}</td>
                <td>{{$user->cp}}</td>
                <td>{{$user->tel}}</td>
                <td><a href="{{action('CRUD@show',['id'=>$user->idPoeta])}}">Actualizar</a></td>
                <td><a href="{{action('CRUD@destroy',['id'=>$user->idPoeta])}}">Borrar</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>
    @if(session('status'))
    <div class="alert alert-danger" role="alert">
        {{session('status')}}
    </div>
    @endif
@stop
@section('footer')
    <p>Sticker</p>
    <img src="/images/Sticker.png" alt="Sticker">
    Derechos reservados {{date('Y')}}
@stop