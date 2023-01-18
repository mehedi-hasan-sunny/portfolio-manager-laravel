<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->uuid();
            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('username')->unique();
            $table->string('phone_code');
            $table->string('phone_number')->unique();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->enum('status', ['registered', 'active', 'inactive', 'restricted', 'banned'])->default('registered');
            $table->enum('type', ['regular', 'maintainer', 'admin'])->default('regular');
            $table->string('ip')->nullable();
            $table->dateTime('logged_in_at')->nullable();
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
        Schema::dropIfExists('users');
    }
};
