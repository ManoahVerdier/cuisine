<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageFonctionnalitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_fonctionnalites', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('intro')->nullable();
            $table->text('fct1_text')->nullable();
            $table->text('fct1_title')->nullable();
            $table->text('fct1_img')->nullable();
            $table->text('fct2_text')->nullable();
            $table->text('fct2_title')->nullable();
            $table->text('fct2_img')->nullable();
            $table->text('fct3_text')->nullable();
            $table->text('fct3_title')->nullable();
            $table->text('fct3_img')->nullable();
            $table->text('fct4_text')->nullable();
            $table->text('fct4_title');
            $table->text('fct4_img')->nullable();
            $table->text('fct5_text')->nullable();
            $table->text('fct5_title')->nullable();
            $table->text('fct5_img')->nullable();
            $table->text('fct6_text')->nullable();
            $table->text('fct6_title')->nullable();
            $table->text('fct6_img')->nullable();
            $table->text('fct7_text')->nullable();
            $table->text('fct7_title')->nullable();
            $table->text('fct7_img')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('page_fonctionnalites');
    }
}
