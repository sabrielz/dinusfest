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
        Schema::create('tb_canteens', function (Blueprint $table) {
            $table->id('canteen_id');
						$table->string('canteen_name');
						$table->string('canteen_owner');
						$table->json('products');
            $table->timestamps();
						$table->dateTime('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_canteens');
    }
};
