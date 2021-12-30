<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('webs', function (Blueprint $table) {
            $table->id();
            $table->string('cover_image');
            $table->string('website_name');
            $table->integer('album_pagination');
            $table->string('about_thumbnail_image');
            $table->text('about_website');
            $table->string('email');
            $table->string('phone');
            $table->string('github');
            $table->string('facebook')->nullable();
            $table->string('instagram')->nullable();
            $table->string('address');
            $table->text('footer_content');
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
        Schema::dropIfExists('webs');
    }
}
