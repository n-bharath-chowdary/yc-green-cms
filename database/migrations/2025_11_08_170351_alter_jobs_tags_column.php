<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (Schema::hasTable('job')) {
            Schema::table('job', function (Blueprint $table) {
                if (!Schema::hasColumn('job', 'tags')) {
                    $table->json('tags')->nullable();
                }
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasTable('job') && Schema::hasColumn('job', 'tags')) {
            Schema::table('job', function (Blueprint $table) {
                $table->dropColumn('tags');
            });
        }
    }
};
