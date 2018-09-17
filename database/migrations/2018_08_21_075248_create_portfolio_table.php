<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePortfolioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('portfolio', function (Blueprint $table) {
            $table->increments('id');
            $table->string('portfolio_title')->nullable();
            $table->integer('portfolio_category')->nullable();
            $table->string('portfolio_image')->nullable();
            $table->text('portfolio_content')->nullable();
            $table->string('portfolio_url')->nullable();
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
        Schema::dropIfExists('portfolio');
    }
}
