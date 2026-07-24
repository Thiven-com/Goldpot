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
        Schema::table('scheme_payments', function (Blueprint $table) {
            //
            $table->unsignedInteger('installment_no')->after('scheme_member_id')->nullable();

            $table->date('due_date')->nullable()->after('amount');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('scheme_payments', function (Blueprint $table) {
            //
        });
    }
};
