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
        Schema::create('request_consultations', function (Blueprint $table) {
            $table->id();
            $table
                ->foreignId('user_id')
                ->constrained('users')
                ->nullable()
                ->onDelete('cascade');
            $table
                ->foreignId('psikolog_id')
                ->constrained('psikologs')
                ->nullable()
                ->onDelete('cascade');
            $table->date('consultation_date');
            $table->string('consultation_time');
            $table->string('therapy_type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('request_consultations');
    }
};