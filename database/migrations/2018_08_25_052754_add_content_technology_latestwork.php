<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddContentTechnologyLatestwork extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('latestwork', function($table) {
            $table->string('latestwork_technology')->after('latestwork_category')->nullable();
            $table->text('latestwork_content')->after('latestwork_technology')->nullable();
            $table->string('latestwork_url')->after('latestwork_content')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
