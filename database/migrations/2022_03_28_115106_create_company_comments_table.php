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
        Schema::create('company_comments', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('company_id');
            $table->unsignedInteger('user_id');
            $table->text('comment')->nullable();
            $table->integer('star')->default(5);
            $table->integer('status')->default(1)->comment('1=active , 2=in-active');
            $table->timestamps();

            $table->foreign('company_id')->refference('id')->on('companies')->onDelete('cascate');
            $table->foreign('user_id')->refference('id')->on('users')->onDelete('cascate');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('company_comments');
    }
};
