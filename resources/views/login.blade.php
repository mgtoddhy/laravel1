@extends('layouts.admin')

@section('title','login')

@section('content')

    @if(session('warning'))
        @alert
            {{session('warning')}}
        @endalert
    @endif

<form method="post">
    @csrf
    <input type="email" name="email" placeholder="Digite um email"><br/><br/>
    <input type="password" name="password" placeholder="digite uma senha">
    <input type="submit" value="Entrar">

</form>

@endsection