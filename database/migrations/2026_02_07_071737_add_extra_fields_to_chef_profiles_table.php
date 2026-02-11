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
        Schema::table('chef_profiles', function (Blueprint $table) {
            $table->integer('experience_year')->default(0)->after('user_id');
        $table->text('bio')->nullable()->after('experience_year');
        $table->string('speciality')->nullable()->after('bio');

        $table->float('rating')->default(0)->after('speciality');
        $table->integer('total_reviews')->default(0)->after('rating');

        $table->decimal('latitude', 10, 8)->nullable()->after('total_reviews');
        $table->decimal('longitude', 11, 8)->nullable()->after('latitude');

        $table->boolean('is_available')->default(1)->after('longitude');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('chef_profiles', function (Blueprint $table) {
           $table->dropColumn([
            'experience_year',
            'bio',
            'speciality',
            'rating',
            'total_reviews',
            'latitude',
            'longitude',
            'is_available'
        ]);
        });
    }
};
