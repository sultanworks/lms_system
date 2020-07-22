<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRelationshipFieldsToTestResultsTable extends Migration
{
    public function up()
    {
        Schema::table('test_results', function (Blueprint $table) {
            $table->unsignedInteger('test_id')->nullable();
            $table->foreign('test_id', 'test_fk_1878543')->references('id')->on('tests');
            $table->unsignedInteger('student_id')->nullable();
            $table->foreign('student_id', 'student_fk_1878544')->references('id')->on('users');
        });
    }
}
