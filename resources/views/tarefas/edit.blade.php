@extends('layouts.admin')

@section('title','Editar tarefas')

@section('content')
<h1>Editar</h1>

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
        <input type="text" name="titulo" value="{{$data->titulo}}"/>
    </label>
    <input type="submit" value="Salvar"/>
</form>
@endsection