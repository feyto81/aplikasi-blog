<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableArtikels extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_artikels', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('judul');
            $table->text('body');
            $table->text('gambar');
            $table->unsignedBigInteger('categoris_id');
            $table->foreign('categoris_id')->references('id')->on('table_categories')->onDelete('cascade');
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
        Schema::dropIfExists('table_artikels');
    }
}
