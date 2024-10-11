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
        Schema::create('livrarias', function (Blueprint $table) {
            $table->id('idLivro');
            $table->string('nomeLivro');
            $table->string('edicaoLivro');
            $table->string('editoraLivro');
            $table->string('autorLivro');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livrarias');
    }
};
