@extends('layouts.admin')

@section('title','Adiconar tarefas')

@section('content')
<h1>Adcionar</h1>

@if ($errors->any())
    @alert
        @foreach ($errors->all() as $error)
            {{ $error }}<br/>
        @endforeach
    @endalert
@endif

<br/>
<br/>
<form method="post">
    @csrf
    <label>
        Titulo:<br/>
        <input type="text" name="titulo" />
    </label>
    <input type="submit" value="Adicionar"/>
</form>
@endsection