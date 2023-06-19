<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Adicione aqui as colunas que você deseja adicionar à tabela de usuários
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('cpf')->unique()->nullable();
            $table->string('cnpj')->unique()->nullable();
            $table->date('data_nascimento')->nullable();;
            $table->string('telefone');
            $table->string('cidade');
            $table->string('cep');
            $table->string('uf');
            $table->string('endereco');
                  
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
