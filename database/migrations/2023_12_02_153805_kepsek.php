<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('kepalasekolah', function (Blueprint $table) {
            $table->id();
            $table->string('kepsek_name');
            $table->text('kepsek_welcome');
            $table->date('kepsek_date');
            $table->text('kepsek_history');
            $table->string('kepsek_img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kepalasekolah');
    }
};
