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
        Schema::table('users', function (Blueprint $table) {
            !Schema::hasColumn('users', 'username') && $table->string('username')->unique()->after('id');
            !Schema::hasColumn('users', 'display_name') && $table->string('display_name')->after('username');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropIndex('users_username_unique'); // Drop index ก่อน
            $table->dropColumn('username');
            $table->dropColumn('display_name');
        });
    }
};
