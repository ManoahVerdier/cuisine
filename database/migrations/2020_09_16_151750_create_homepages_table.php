<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHomepagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(
            'homepages', 
            function (Blueprint $table) {
                $table->id();
                $table->text('banner_text')->nullable();
                $table->text('confiance_text')->nullable();
                $table->text('tab1_text')->nullable();
                $table->text('tab2_text')->nullable();
                $table->text('tab3_text')->nullable();
                $table->text('tab4_text')->nullable();
                $table->text('tab5_text')->nullable();
                $table->text('tab6_text')->nullable();
                $table->text('tab1_img')->nullable();
                $table->text('tab2_img')->nullable();
                $table->text('tab3_img')->nullable();
                $table->text('tab4_img')->nullable();
                $table->text('tab5_img')->nullable();
                $table->text('tab6_img')->nullable();
                $table->text('connexion_text')->nullable();
                $table->text('demo_text')->nullable();
                $table->timestamps();
            }
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('homepages');
    }
}
