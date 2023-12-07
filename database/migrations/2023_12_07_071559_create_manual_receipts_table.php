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
        Schema::create('manual_receipts', function (Blueprint $table) {
            $table->id();
            $table->string('OR_NUMBER')->unique();
            $table->string('PAYOR');
            $table->string('COLL'); // enum('type', ['choice1'], [choice2])->default('choice') - must create enum file
            $table->string('CODE'); // enum('type', ['choice1'], [choice2])->default('choice') - must create enum file
            $table->decimal('AMOUNT', 10, 2);
            $table->decimal('TOTAL', 10, 2)->nullable();
            $table->string('REMARKS')->nullable(); // possible longText
            $table->date('REPORT_DATE');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('manual_receipts');
    }
};
