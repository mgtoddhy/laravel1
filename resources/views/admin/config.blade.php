@extends('layouts.admin')

@section('title','Configuraçoes')

@section('content')
    <h1>Configurações</h1>
    Versão: {{$versao}} 
    <a href="/logout">Sair</a>
        @component('components.alert')
            estou aqui ...
        @endcomponent

Meu nome é {{$nome}}, costumo ter {{$idade}} anos. <br/> 
<hr>
Lista de tarefa
<ul>
    @forelse ($lista as $item)
        <li>{{$item}}</li>        
    @empty
        <li>Não ha tarefa</li>
    @endforelse
</ul>

<hr>
<form method="POST">
@csrf
Nome:<br>
<input type="text" name="nome" /><br/>

Idate:<br>
<input type="text" name="idade" /><br/>

Cidade:<br>
<input type="text" name="cidade" /><br/>

<input type ="submit" value="Enviar" />

</form>

<a href="/config/info">Informações</a>
@endsection