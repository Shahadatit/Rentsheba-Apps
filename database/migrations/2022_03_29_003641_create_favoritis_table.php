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
        Schema::create('favoritis', function (Blueprint $table) {
            $table->id();
            $table->integer('post_id')->nullable();
            $table->integer('company_id')->nullable();
            $table->integer('user_id');
            $table->integer('status')->default(1)->comment('1=active, 2=in-active');
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
        Schema::dropIfExists('favoritis');
    }
};
