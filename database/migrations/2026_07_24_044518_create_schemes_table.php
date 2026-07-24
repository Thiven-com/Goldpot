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
        Schema::create('schemes', function (Blueprint $table) {

            $table->id();

            $table->string('title')->nullable();
            $table->string('slug')->nullable();

            $table->string('scheme_code')->nullable()->nullable();

            // Monthly installment amount
            $table->decimal('monthly_amount', 10, 2)->nullable();

            // Number of monthly installments
            $table->unsignedInteger('installments')->nullable();

            // Bonus details
            $table->decimal('bonus_amount', 10, 2)->default(0);

            $table->enum('bonus_type', [
                'fixed',
                'percentage'
            ])->default('fixed');

            // One-time joining fee (optional)
            $table->decimal('joining_fee', 10, 2)->default(0);

            $table->boolean('wallet_credit_bonus')->default(false);

            $table->decimal('max_wallet_bonus', 10, 2)->default(0);

            // Scheme image
            $table->string('image')->nullable();

            // Short text shown on cards
            $table->string('short_description')->nullable();

            // Description
            $table->longText('description')->nullable();

            // Terms & Conditions
            $table->longText('terms_conditions')->nullable();

            // Is online joining allowed?
            $table->boolean('is_online')->default(true);

            // Status
            $table->enum('status', [
                'active',
                'inactive'
            ])->default('active');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schemes');
    }
};
