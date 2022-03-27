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
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name')->unique();
            $table->text('slug')->nullable();
            $table->string('cuntry')->nullable();
            $table->string('website')->nullable();
            $table->string('com_mobile')->nullable();
            $table->integer('cat_id')->nullable();
            $table->text('description')->nullable();
            $table->text('tags')->nullable();
            $table->string('main_title')->nullable();
            $table->text('c_address')->nullable();
            $table->string('c_district')->nullable();
            $table->string('c_zipcode')->nullable();
            $table->string('o_name')->nullable();
            $table->string('o_email')->nullable();
            $table->string('o_phone')->nullable();
            $table->text('cover_photo')->nullable();
            $table->text('facebook')->nullable();
            $table->text('instagram')->nullable();
            $table->text('linkedin')->nullable();
            $table->text('pinterest')->nullable();
            $table->integer('user_id')->nullable();
            $table->integer('packeg')->default(1)->comment(' 1=Free , 2=Silver , 3=gold ');
            $table->integer('admin_company')->default(0)->comment('0=user company , 1=admin company');
            $table->integer('status')->default(1)->comment('1=active , 2=In-Active');
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
        Schema::dropIfExists('companies');
    }
};
