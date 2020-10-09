<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableFonctionnaliteAddLines extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('page_fonctionnalites', function (Blueprint $table) {
            $table->text('fct8_text')->nullable();
            $table->text('fct8_title')->nullable();
            $table->text('fct8_img')->nullable();
            $table->text('fct9_text')->nullable();
            $table->text('fct9_title')->nullable();
            $table->text('fct9_img')->nullable();
            $table->text('fct10_text')->nullable();
            $table->text('fct10_title')->nullable();
            $table->text('fct10_img')->nullable();
            $table->text('fct11_text')->nullable();
            $table->text('fct11_title')->nullable();
            $table->text('fct11_img')->nullable();
            $table->text('fct12_text')->nullable();
            $table->text('fct12_title')->nullable();
            $table->text('fct12_img')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('page_fonctionnalites', function (Blueprint $table) {
            //
        });
    }
}
