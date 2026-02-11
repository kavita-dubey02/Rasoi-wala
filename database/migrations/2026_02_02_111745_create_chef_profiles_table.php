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
        Schema::create('chef_profiles', function (Blueprint $table) {
            $table->id();
             $table->foreignId('user_id')->constrained()->onDelete('cascade');

    // Current Address
    $table->string('current_building');
    $table->string('current_street');
    $table->string('current_city');
    $table->string('current_state');
    $table->string('current_pincode');

    // Permanent Address
    $table->string('permanent_building');
    $table->string('permanent_street');
    $table->string('permanent_city');
    $table->string('permanent_state');
    $table->string('permanent_pincode');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chef_profiles');
    }
};
