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
        Schema::create('purchase', function (Blueprint $table) {
            $table->id();
            $table->string('code')->unique();
            $table->date('trx_date');
            $table->decimal('sub_amount', 15, 2)->nullable();
            $table->decimal('amount_total', 15, 2)->nullable();
            $table->decimal('discount_amount', 15, 0)->nullable();
            $table->integer('created_by')->nullable();
            $table->integer('updated_by')->nullable();
            $table->integer('total_product')->nullable();
            $table->foreignId('vendor_id')->constrained('vendors')->onDelete('cascade');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchase');
    }
};
