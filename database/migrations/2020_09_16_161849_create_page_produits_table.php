<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageProduitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_produits', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('banner_texte')->nullable();
            $table->text('carac1_title')->nullable();
            $table->text('carac1_content')->nullable();
            $table->text('carac2_title')->nullable();
            $table->text('carac2_content')->nullable();
            $table->text('carac3_title')->nullable();
            $table->text('carac3_content')->nullable();
            $table->text('carac4_title')->nullable();
            $table->text('carac4_content')->nullable();
            $table->text('carac5_title')->nullable();
            $table->text('carac5_content')->nullable();
            $table->text('carac6_title')->nullable();
            $table->text('carac6_content')->nullable();
            $table->text('carac7_title')->nullable();
            $table->text('carac7_content')->nullable();
            $table->text('carac8_title')->nullable();
            $table->text('carac8_content')->nullable();
            $table->text('carac9_title')->nullable();
            $table->text('carac9_content')->nullable();
            $table->text('carac10_title')->nullable();
            $table->text('carac10_content')->nullable();
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
        Schema::dropIfExists('page_produits');
    }
}
