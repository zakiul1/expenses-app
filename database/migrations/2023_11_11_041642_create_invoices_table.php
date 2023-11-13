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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_no');
            $table->float('invoice_value', 12, 2);
            $table->unsignedBigInteger('buyer_id');
            $table->unsignedBigInteger('factory_id');
            $table->unsignedBigInteger('bank_id');
            $table->unsignedBigInteger('user_id');
            $table->float('factory_value', 12, 2)->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('company_id');
            $table->foreign('company_id')->references('id')->on('companies')->onDelete('cascade');
            $table->foreign('buyer_id', 'fk_invoices_buyer_id')->references('id')->on('buyers')->onDelete('cascade');
            $table->foreign('factory_id', 'fk_invoices_factory_id')->references('id')->on('factories')->onDelete('cascade');
            $table->foreign('bank_id', 'fk_invoices_bank_id')->references('id')->on('banks')->onDelete('cascade');
            $table->foreign('user_id', 'fk_invoices_user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
