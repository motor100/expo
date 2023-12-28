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
        Schema::table('offices', function (Blueprint $table) {
            $table->string('title_en')->after('title_ru');
            $table->string('title_tr')->after('title_en');
            $table->string('address_en')->after('address_ru');
            $table->string('address_tr')->after('address_en');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('offices', function (Blueprint $table) {
            $table->dropColumn('title_en');
            $table->dropColumn('title_tr');
            $table->dropColumn('address_en');
            $table->dropColumn('address_tr');
        });
    }
};
