<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTempatWisatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tempat_wisatas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('city_id')->nullable()->constrained()->onDelete('set null');
            $table->string('slug')->unique();
            $table->string('name');
            $table->string('contact')->nullable();
            $table->longText('history')->nullable();
            $table->time('jam_buka')->nullable();
            $table->time('jam_tutup')->nullable();
            $table->string('status')->default('DRAFT');
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
        Schema::dropIfExists('tempat_wisatas');
    }
}
