<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMetadataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('metadata', function (Blueprint $table) {
            $table->increments('meta_id');
            $table->integer('site_id')->unsigned();
            $table->text('tag', 256);
            $table->text('value', 65000);
            $table->timestamps();
        });

        Schema::table('metadata', function($table) {
            $table->foreign('site_id')->references('id')->on('sites')->onDelete('Cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('metadata');
    }
}
