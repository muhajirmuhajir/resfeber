<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('paket_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('tempat_wisata_id')->nullable()->constrained()->onDelete('set null');
            $table->string('payment_id')->nullable();
            $table->date('transaction_date');
            $table->date('booking_date');
            $table->string('transaction_status');
            $table->integer('price_total');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
