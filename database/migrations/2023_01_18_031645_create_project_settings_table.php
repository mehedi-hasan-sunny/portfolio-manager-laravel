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
        Schema::create('project_settings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('settings_id')->constrained('settings');
            $table->string('api_name')->unique();
            $table->string('api_url');
            $table->text('api_params')->nullable();
            $table->text('api_token')->nullable();
            $table->string('api_username')->nullable();
            $table->string('api_password')->nullable();
            $table->json('api_json_structure');
            $table->foreignId('created_by')->nullable()->constrained('users');
            $table->foreignId('updated_by')->nullable()->constrained('users');
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
        Schema::dropIfExists('project_settings');
    }
};
