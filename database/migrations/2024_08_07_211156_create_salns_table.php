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
        Schema::create('salns', function (Blueprint $table) {
            $table->id();
            // Personal Information
            $table->string('name');
            $table->date('date_of_birth');
            $table->string('position');
            $table->string('department');
            $table->string('agency');
            $table->string('email')->nullable();
            $table->string('contact_number')->nullable();
            $table->date('date_filed');
            // Assets
            $table->decimal('real_properties', 15, 2)->default(0);
            $table->decimal('personal_properties', 15, 2)->default(0);
            $table->decimal('total_assets', 15, 2)->default(0);
            // Liabilities
            $table->decimal('liabilities', 15, 2)->default(0);
            $table->decimal('net_worth', 15, 2)->storedAs('total_assets - liabilities');
            // Other Details
            $table->text('business_interests')->nullable();
            $table->text('financial_connections')->nullable();
            $table->text('relatives_in_government')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salns');
    }
};
