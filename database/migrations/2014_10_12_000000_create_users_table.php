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
        Schema::create('tb_users', function (Blueprint $table) {
            $table->id();
						$table->foreignId('profile_id');
						$table->foreignId('finance_id');
						$table->foreignId('parent_id')->nullable();
						$table->foreignId('limiter_id')->nullable();
						$table->string('username');
						$table->string('password');
            $table->string('type');
            $table->timestamps();
						$table->dateTime('deleted_at');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_users');
    }
};
