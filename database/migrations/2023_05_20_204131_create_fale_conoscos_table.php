<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('fale_conoscos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome',80);
            $table->string('empresa',80);
            $table->string('telefone');
            $table->string('email',80);
            $table->text('mensagem');
            $table->string('checkbox');
            $table->string('tipo_suporte')->default('x');
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fale_conoscos');
    }
};
