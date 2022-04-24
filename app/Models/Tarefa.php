<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    protected $table = 'tarefas';
    protected $primaryKey = 'id';
    protected $fillable = ['nome', 'email', 'telefone', 'endereco'];
}
