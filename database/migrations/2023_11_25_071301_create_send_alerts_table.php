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
        Schema::create('send_alerts', function (Blueprint $table) {
            $table->id();
            $table->string('sender_name');
            $table->string('source_app');
            $table->integer('amount');
            $table->text('sender_message')->nullable();
            $table->boolean('is_test');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('send_alerts');
    }
};
