<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TarefaUser extends Model
{
    use HasFactory;
    protected $table = 'tarefa_user';
    protected $fillable = ['user_id', 'tarefa_id', 'created_at', 'updated_at'];
}
