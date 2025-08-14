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
    Schema::table('learners', function (Blueprint $table) {
        $table->string('pdf')->nullable()->after('phone'); // store PDF path
    });
}

public function down(): void
{
    Schema::table('learners', function (Blueprint $table) {
        $table->dropColumn('pdf');
    });
}

};
