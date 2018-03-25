<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ApagarColunasNotafiscal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nota_fiscals', function (Blueprint $table) {
            $table->dropColumn('cnpj');
            $table->dropColumn('razao');
            $table->dropColumn('nota_fiscal');
            $table->dropColumn('data_emissao');
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
