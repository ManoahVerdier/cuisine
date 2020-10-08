<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePageInterventionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('page_interventions', function (Blueprint $table) {
            $table->id();
            $table->text('slug');
            $table->text('title');
            $table->text('intro');
            $table->text('text_btn')->nullable();
            $table->text('title_1')->nullable();
            $table->text('contenu_1')->nullable();
            $table->text('img_1')->nullable();
            $table->text('title_2')->nullable();
            $table->text('contenu_2')->nullable();
            $table->text('img_2')->nullable();
            $table->text('title_3')->nullable();
            $table->text('contenu_3')->nullable();
            $table->text('img_3')->nullable();
            $table->text('title_4')->nullable();
            $table->text('contenu_4')->nullable();
            $table->text('img_4')->nullable();
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
        Schema::dropIfExists('page_interventions');
    }
}
