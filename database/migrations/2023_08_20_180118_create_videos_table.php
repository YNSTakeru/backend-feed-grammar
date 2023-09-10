<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create("videos", function (Blueprint $table) {
            $table->id();
            $table->foreignId("question_id")->constrained();
            $table->string("url", 100);
            $table
                ->foreign("url")
                ->references("url")
                ->on("urls");
            $table->string("answer", 100);
            $table->unsignedDecimal("start_time", 6, 2);
            $table->unsignedDecimal("end_time", 6, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("videos");
    }
};
