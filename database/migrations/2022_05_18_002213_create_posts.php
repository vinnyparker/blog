<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePosts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('br_posts', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('category_id')->nullable(false);
            $table->string('title')->nullable(false);
            $table->string('slug')->nullable();
            $table->string('tags')->nullable();
            $table->longText('content')->nullable(false);
            $table->integer('cms_users_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('br_posts');
    }
}
