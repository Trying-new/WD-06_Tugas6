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
<<<<<<< HEAD
        // Schema::create('cache', function (Blueprint $table) {
        //     $table->string('key')->primary();
        //     $table->mediumText('value');
        //     $table->integer('expiration');
        // });

        // Schema::create('cache_locks', function (Blueprint $table) {
        //     $table->string('key')->primary();
        //     $table->string('owner');
        //     $table->integer('expiration');
        // });
=======
        Schema::create('cache', function (Blueprint $table) {
            $table->string('key')->primary();
            $table->mediumText('value');
            $table->integer('expiration');
        });

        Schema::create('cache_locks', function (Blueprint $table) {
            $table->string('key')->primary();
            $table->string('owner');
            $table->integer('expiration');
        });
>>>>>>> 13631e53cc77e502521656cb681b8d0d87f456ef
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
<<<<<<< HEAD
        // Schema::dropIfExists('cache');
        // Schema::dropIfExists('cache_locks');
=======
        Schema::dropIfExists('cache');
        Schema::dropIfExists('cache_locks');
>>>>>>> 13631e53cc77e502521656cb681b8d0d87f456ef
    }
};
