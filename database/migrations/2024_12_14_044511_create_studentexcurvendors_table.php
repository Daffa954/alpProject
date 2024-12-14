<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('studentexcurvendors', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column: 'excurvendor_id')->constrained(table: 'excurvendors', indexName: 'excurvendor_id');
            $table->foreignId(column: 'student_id')->constrained(table: 'students', indexName: 'student_id');
            $table->integer('score_mid');
            $table->integer('score_final');
            $table->text('url_certificate');
            $table->text('note');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('studentexcurvendors');
    }
};