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
        Schema::table('partners', function (Blueprint $table) {
            $table->string('title_en')->after('title_ru');
            $table->string('title_tr')->after('title_en');
            $table->string('name_en')->after('name_ru');
            $table->string('name_tr')->after('name_en');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('partners', function (Blueprint $table) {
            $table->dropColumn('title_en');
            $table->dropColumn('title_tr');
            $table->dropColumn('name_en');
            $table->dropColumn('name_tr');
        });
    }
};
