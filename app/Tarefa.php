<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
   // protected $table = 'tarefas'; // quando a tabela é diferente da classe se não for ele assume no plural da classe
   // protected $primaryKey = 'id'; // quando o campo primary key não se chama id, coloca-se o nome
   // public $incrementing = false; // quando o campo primario não é auto incremento, coloca false
   // protected $keyType = 'string'; // quando a chave é string e não inteiro.

   //created_at, updated_at
   // public $timestamps = false; para não usar os campos padroes
    // const CREATED_AT = 'nome do campo'; caso o nome do campo seja diferente
    // const UPDATED_AT = 'nome do campo'; caso o nome do campo seja diferente
    public $timestamps = false;
    protected $fillable = ['titulo'];

}
