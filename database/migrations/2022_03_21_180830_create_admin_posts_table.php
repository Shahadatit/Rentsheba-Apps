<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_posts', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('slug');
            $table->string('focus_keyword')->nullable();
            $table->text('discription')->nullable();
            $table->text('sort_description')->nullable();
            $table->integer('cat_id')->nullable();
            $table->integer('user_id')->nullable();
            $table->text('tags')->nullable();
            $table->text('image')->nullable();
            $table->integer('status')->default(1)->comment('1=active,2=in-active');
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
        Schema::dropIfExists('admin_posts');
    }
};
