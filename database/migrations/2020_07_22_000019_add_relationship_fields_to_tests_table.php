<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToTestsTable extends Migration
{
    public function up()
    {
        Schema::table('tests', function (Blueprint $table) {
            $table->unsignedInteger('course_id')->nullable();
            $table->foreign('course_id', 'course_fk_1878519')->references('id')->on('courses');
            $table->unsignedInteger('lesson_id')->nullable();
            $table->foreign('lesson_id', 'lesson_fk_1878520')->references('id')->on('lessons');
        });
    }
}
