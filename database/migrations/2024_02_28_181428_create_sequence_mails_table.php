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
        Schema::create('sequence_mails', function (Blueprint $table) {
            $table->id();
            $table->string('subject', 255);
            $table->string('status', 20);
            $table->longText('content')->nullable();
            $table->json('filters')->nullable();
            $table->foreignId('sequence_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sequence_mails');
    }
};
