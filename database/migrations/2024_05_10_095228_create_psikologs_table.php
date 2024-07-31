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
        Schema::create('psikologs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone_number')->nullable();
            $table->date('birthdate')->nullable();
            $table->string('code_psikolog')->nullable();
            $table->string('profile_photo')->nullable();
            $table->string('last_education')->nullable();
            $table->string('specialization_therapy')->nullable();
            $table->integer('service_cost_perhour')->nullable();
            $table->string('status_account')->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('psikologs');
    }
};
