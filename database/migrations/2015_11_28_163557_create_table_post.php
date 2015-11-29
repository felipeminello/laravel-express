<?php

use App\User;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePost extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('user_id')->unsigned();
            if (Schema::hasTable('users'))
			    $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade');
            $table->string('title', 255);
			$table->string('subtitle', 511);
            $table->text('content');
            $table->timestamps();
			$table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('posts');
    }
}
