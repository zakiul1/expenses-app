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
        Schema::create('banks', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('address')->nullable();
            $table->string('account_no')->nullable();
            $table->string('swift_code')->nullable();
            $table->string('email')->nullable()->unique()->index();
            $table->string('phone_no')->nullable();
            $table->tinyInteger('bank_type')->comment('1: Buyer Bank, 2: Factory Bank');
            $table->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banks');
    }
};
