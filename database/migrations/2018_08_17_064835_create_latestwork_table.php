<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLatestworkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('latestwork', function (Blueprint $table) {
            $table->increments('id');
            $table->string('latestwork_title')->nullable();
            $table->string('latestwork_image')->nullable();
            $table->integer('latestwork_category')->nullable();
            $table->enum('is_delete', ['Y', 'N'])->default('N');
            $table->enum('show_front', ['Y', 'N'])->default('Y');
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
        Schema::dropIfExists('latestwork');
    }
}
