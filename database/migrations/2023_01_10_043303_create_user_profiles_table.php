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
        Schema::create('tb_user_profiles', function (Blueprint $table) {
            $table->id('profile_id');
						$table->foreignId('user_id');
						$table->foreignId('finance_id');
						$table->foreignId('parent_id')->nullable();
						$table->string('name');
						$table->string('address');
						$table->date('birth_date');
						$table->string('password');
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
        Schema::dropIfExists('tb_user_profiles');
    }
};
