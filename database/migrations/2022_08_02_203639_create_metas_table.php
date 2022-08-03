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
        Schema::create('metas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('title');
            $table->string('seo_title');
            $table->string('subtitle');
            $table->text('description');
            $table->string('seo_description');
            $table->string('email_address');
            $table->string('phone_number');
            $table->string('profile_image_url');
            $table->string('seo_image_url');
            $table->string('location');
            $table->string('facebook_link');
            $table->string('youtube_link');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('metas');
    }
};
