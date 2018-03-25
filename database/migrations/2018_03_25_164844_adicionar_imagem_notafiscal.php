<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AdicionarImagemNotafiscal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nota_fiscals', function (Blueprint $table) {
            $table->string('numeroNota');
            $table->string('imagem');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nota_fiscals', function (Blueprint $table) {
            $table->dropColumn('numeroNota');
            $table->dropColumn('imagem');
        });
    }
}
