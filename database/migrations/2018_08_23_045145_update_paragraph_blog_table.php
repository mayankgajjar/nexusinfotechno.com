<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateParagraphBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blog', function($table) {
            $table->text('blog_paragraph1')->after('blog_content')->nullable();
            $table->text('blog_paragraph2')->after('blog_paragraph1')->nullable();
            $table->text('blog_paragraph3')->after('blog_paragraph2')->nullable();
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
