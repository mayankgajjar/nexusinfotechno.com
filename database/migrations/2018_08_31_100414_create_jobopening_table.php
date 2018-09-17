<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobopeningTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobopening', function (Blueprint $table) {
            $table->increments('id');
			$table->string('title');
			$table->text('job_description');
			$table->string('qualification');
			$table->integer('number_vacancy');
			$table->string('salary');
			$table->enum('salary_negotiable', ['Y', 'N'])->default('Y');
			$table->string('experience');
			$table->string('location');
			$table->string('type');
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
        Schema::dropIfExists('jobopening');
    }
}
