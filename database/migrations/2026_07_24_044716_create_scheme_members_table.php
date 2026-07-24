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
        Schema::create('scheme_members', function (Blueprint $table) {

            $table->id();

            $table->bigInteger('scheme_id')->nullable();
            $table->bigInteger('customer_id')->nullable();

            // Membership Details
            $table->string('member_no')->nullable();

            // Scheme Snapshot
            $table->decimal('monthly_amount', 10, 2)->nullable();
            $table->unsignedInteger('installments')->nullable();

            $table->decimal('bonus_amount', 10, 2)->default(0);

            $table->enum('bonus_type', [
                'fixed',
                'percentage',
            ])->default('fixed');

            $table->decimal('joining_fee', 10, 2)->default(0);

            // Payment Progress
            $table->decimal('paid_amount', 10, 2)->default(0);

            $table->decimal('wallet_credited', 10, 2)->default(0);

            $table->unsignedInteger('paid_installments')->default(0);

            // Dates
            $table->date('joining_date')->nullable();

            $table->date('next_due_date')->nullable();

            $table->date('completion_date')->nullable();

            // Status
            $table->enum('status', [
                'pending',
                'active',
                'completed',
                'cancelled',
            ])->default('pending');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scheme_members');
    }
};
