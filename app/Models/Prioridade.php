<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prioridade extends Model
{
    use HasFactory;
    protected $table = 'prioridade';

    public function tarefas()
    {
        return $this->hasMany(Tarefa::class,'prioridade_id');
    }
}
