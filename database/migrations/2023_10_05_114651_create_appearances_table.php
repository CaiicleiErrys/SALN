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
        Schema::create('appearances', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('user_id');
            $table->string('fullname')->nullable();
            $table->string('date_start')->nullable();
            $table->string('date_end')->nullable();
            $table->string('office')->nullable();
            $table->string('venue')->nullable();
            $table->string('venue_address')->nullable();
            $table->longText('purpose')->nullable();
            // $table->string('transport')->nullable();
            // $table->string('accommodation')->nullable();
            // $table->string('meals_breakfast')->nullable();
            // $table->string('meals_lunch')->nullable();
            // $table->string('meals_dinner')->nullable();
            // $table->string('transport_period')->nullable();
            // $table->string('accommodation_period')->nullable();
            // $table->string('breakfast_period')->nullable();
            // $table->string('lunch_period')->nullable();
            // $table->string('dinner_period')->nullable();
            $table->string('approved_by')->nullable();
            $table->string('designation')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appearances');
    }
};
