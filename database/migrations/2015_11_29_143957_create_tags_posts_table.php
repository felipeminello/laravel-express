<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts_tags', function (Blueprint $table) {
            $table->integer('post_id')->unsigned();

			if (Schema::hasTable('posts'))
          		$table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade')->onUpdate('cascade');

			$table->integer('tag_id')->unsigned();

			if (Schema::hasTable('tags'))
				$table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade')->onUpdate('cascade');

			$table->primary(['post_id', 'tag_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts_tags');
    }
}
