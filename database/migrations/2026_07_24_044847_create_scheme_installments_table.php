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
        Schema::create('scheme_installments', function (Blueprint $table) {

            $table->id();

            $table->bigInteger('scheme_member_id')->nullable();

            $table->integer('installment_no')->nullable();

            $table->decimal('amount', 10, 2)->nullable();

            $table->date('due_date')->nullable();

            $table->date('paid_date')->nullable();

            $table->enum('status', [
                'pending',
                'paid',
                'failed',
                'overdue'
            ])->default('pending');

            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scheme_installments');
    }
};
