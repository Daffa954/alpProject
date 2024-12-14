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
        Schema::create('presences', function (Blueprint $table) {
            $table->id();
            $table->foreignId(column: 'meeting_id')->constrained(table: 'meetings', indexName: 'meeting_id');
            $table->foreignId(column: 'excurvendor_id')->constrained(table: 'excurvendors', indexName: 'excurvendor_id_1');
            $table->foreignId(column: 'studentexcurvendor_id')->constrained(table: 'studentexcurvendors', indexName: 'studentexcurvendor_id');
            $table->string('keterangan');
            $table->foreignId(column: 'status_id')->constrained(table: 'statuses', indexName: 'status_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('presences');
    }
};
