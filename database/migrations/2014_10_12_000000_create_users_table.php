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
						$table->foreignId('parent_id')->default(0);
						$table->foreignId('limiter_id')->default(0);
						$table->string('username');
						$table->string('password');
            $table->string('type');
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
        Schema::dropIfExists('tb_users');
    }
};
