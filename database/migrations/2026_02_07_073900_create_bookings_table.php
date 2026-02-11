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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
             $table->string('booking_code')->unique();

        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->foreignId('chef_id')->constrained('users')->onDelete('cascade');
        $table->foreignId('event_type_id')->constrained()->onDelete('cascade');
        $table->foreignId('address_id')->constrained()->onDelete('cascade');

        $table->date('event_date');
        $table->time('start_time');
        $table->integer('total_hours');

        $table->decimal('price_per_hour', 10, 2);
        $table->decimal('total_amount', 10, 2);

        $table->enum('status', [
            'pending',
            'accepted',
            'rejected',
            'confirmed',
            'completed',
            'cancelled_by_user',
            'cancelled_by_chef'
        ])->default('pending');

        $table->text('cancel_reason')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
