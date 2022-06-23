<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColunasAlunos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
        public function up()
        {
            Schema::table('alunos', function (Blueprint $table) {
                $table->string('sexo')->nullable()->change();
                $table->string('endereco');
                $table->string('telefone');
                $table->string('cep');

            });
        }      
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
