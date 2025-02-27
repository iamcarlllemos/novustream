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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('firstname');
            $table->string('lastname');
            $table->string('middlename')
                ->nullable();
            $table->string('address')
                ->nullable();
            $table->string('contact_no')
                ->nullable();
            $table->string('user_type')
                ->nullable();
            $table->string('email')
                ->unique();
            $table->timestamp('email_verified_at')
                ->nullable();
            $table->string('password');
            $table->string('contract_no')
                ->nullable();
            $table->string('contract_date')
                ->nullable();
            $table->string('property_type')
                ->nullable();
            $table->string('meter_no')
                ->nullable();
            $table->boolean('isValidated')
                ->default(false);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
