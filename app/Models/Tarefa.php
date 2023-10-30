<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tarefa extends Model
{
    use HasFactory;
    protected $table = 'tarefa';
    //É preciso adicionar o $fillable caso queira usar a forma do ->create() ou ->update() em vez do ->save()
    protected $fillable = ['titulo', 'descricao', 'created_at', 'updated_at'];
}
