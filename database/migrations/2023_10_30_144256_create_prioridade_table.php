<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('prioridade', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->timestamps();
        });

        // Inserindo valores padrão
        DB::table('prioridade')->insert([
            ['nome' => 'baixo'],
            ['nome' => 'médio'],
            ['nome' => 'alto']
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prioridade');
    }
};
