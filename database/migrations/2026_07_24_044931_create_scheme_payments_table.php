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
        Schema::create('scheme_payments', function (Blueprint $table) {

            $table->id();

            $table->bigInteger('scheme_member_id')->nullable();

            $table->bigInteger('scheme_installment_id')->nullable();

            $table->decimal('amount', 10, 2)->nullable();

            $table->string('payment_method')->nullable();

            $table->string('gateway')->nullable();

            $table->string('gateway_order_id')->nullable();

            $table->string('gateway_payment_id')->nullable();

            $table->string('gateway_signature')->nullable();

            $table->string('transaction_no')->nullable();

            $table->json('gateway_response')->nullable();

            $table->enum('status', [
                'success',
                'failed',
                'pending'
            ])->nullable();

            $table->timestamp('paid_at')->nullable();

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scheme_payments');
    }
};
