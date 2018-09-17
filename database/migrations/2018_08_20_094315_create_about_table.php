<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('about', function (Blueprint $table) {
            $table->increments('id');
            $table->text('introduction_content')->nullable();
            $table->string('introduction_image')->nullable();
            $table->text('approach_work_content')->nullable();
            $table->string('approach_work_image')->nullable();
            $table->text('giving_back_content')->nullable();
            $table->string('giving_back_image')->nullable();
            $table->text('profitability_content')->nullable();
            $table->string('profitability_image')->nullable();
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
        Schema::dropIfExists('about');
    }
}
