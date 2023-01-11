<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_payments', function (Blueprint $table) {
            $table->id('payment_id');
						$table->foreignId('user_id');
						$table->foreignId('canteen_id');
						$table->integer('bill');
						$table->json('items');
            $table->timestamps();
						$table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_payments');
    }
};
