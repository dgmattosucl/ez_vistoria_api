<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDfItemComodosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('df_item_comodos', function (Blueprint $table) {
            $table->foreignId('item_id')->references('id')->on('df_items');
            $table->foreignId('comodo_id')->references('id')->on('df_comodos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('df_item_comodos');
    }
}
