<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();//primary unique unsigned big inter auto increment
            $table->string(column: 'username')->unique();
            $table->string(column: 'email')->unique();
            $table->string(column: 'password');
            $table->rememberToken();
            $table->timestamps();
        });
    }
    //MVC => view controller model
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};


