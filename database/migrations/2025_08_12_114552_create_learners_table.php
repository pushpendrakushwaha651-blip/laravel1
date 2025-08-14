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
    if (!Schema::hasTable('learners')) {
        Schema::create('learners', function (Blueprint $table) {
            $table->id();
            $table->string('name', 30);
            $table->integer('age')->nullable();
            $table->string('email', 50)->nullable();
            $table->string('address', 255)->nullable();
            $table->string('city', 30);
            $table->string('phone', 15);
            $table->string('password', 255);
            $table->timestamps();
        });
    }
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('learners');
    }
};
