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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger("category_id");
            $table->string("course_thumbnail_vedio");
            $table->string("course_bg_vedio");
            $table->string("course_title");
            $table->string("course_duration");
            $table->string("total_class");
            $table->string("course_short_desc");
            $table->string("course_long_desc");
            $table->string("total_project");
            $table->string("career_title");
            $table->string("career_desc");
            $table->string("certificate_image");
            $table->string("status")->default(1)->comment('1=active, 0=inactive');
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
        Schema::dropIfExists('courses');
    }
};
