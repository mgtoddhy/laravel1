@extends('layouts.admin')

@section('title','Cadastro')

@section('content')

@if($errors->any())
    @alert
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>            
        @endforeach
        </ul>   
    @endalert
@endif

<form method="post">
    @csrf
    <input type="text" name="name" placeholder="Digite seu nome" value="{{old('name')}}"><br/><br/>
    <input type="email" name="email" placeholder="Digite um email" value="{{old('email')}}"><br/><br/>
    <input type="password" name="password" placeholder="digite uma senha"><br/><br/>
    <input type="password" name="password_confirmation" placeholder="confirme sua senha"><br/><br/>    
    <input type="submit" value="Cadastrar">

</form>

@endsection