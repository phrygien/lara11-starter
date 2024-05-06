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
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('identity')->unique();
            $table->string('phone_fixe')->unique()->nullable();
            $table->string('phone_mobile')->unique();
            $table->string('email')->unique();
            $table->integer('province_id');
            $table->integer('region_id');
            $table->integer('district_id');
            $table->integer('commune_id');
            $table->string('adresse');
            $table->text('notes')->nullable();
            $table->boolean('is_active')->default(0);
            $table->foreignId('user_id')->constrained()->onUpdate('cascade')->onDelete('cascade');
            $table->integer('type');
            $table->string('logo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schools');
    }
};
