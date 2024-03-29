<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up() : void
    {
        Schema::create('access_permission_user', function (Blueprint $table) {
            $table->string('user_id')->index();
            $table->string('access_permission_id')->index();

            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('access_permission_id')->references('id')->on('access_permissions')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down() : void
    {
        Schema::dropIfExists('access_permission_user');
    }
};
