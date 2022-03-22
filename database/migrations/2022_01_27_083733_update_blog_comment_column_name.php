<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateBlogCommentColumnName extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('blog_comment', function (Blueprint $table) {
            $table->renameColumn('blog_posts_id', 'blog_post_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('blog_comment', function (Blueprint $table) {
            $table->renameColumn('blog_post_id', 'blog_posts_id');
        });
    }
}
