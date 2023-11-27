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
        Schema::create('url_data', function (Blueprint $table) {
            $table->id();
            $table->string('audio_link');
            $table->string('gif_link');
            $table->integer('alert_duration')->unsigned()->default(0);
            $table->integer('sound_volume')->unsigned();
            $table->decimal('min_amount', 10, 2);
            $table->text('message_template');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('url_data');
    }
};
