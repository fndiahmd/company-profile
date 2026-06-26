<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        $hasPlacement = Schema::hasColumn('galleries', 'placement');
        $hasIsActive = Schema::hasColumn('galleries', 'is_active');

        Schema::table('galleries', function (Blueprint $table) use ($hasPlacement, $hasIsActive) {
            if (! $hasPlacement) {
                $table->string('placement')->default('general_gallery')->after('image');
            }

            if (! $hasIsActive) {
                $table->boolean('is_active')->default(true)->after('placement');
            }
        });
    }

    public function down(): void
    {
        $hasIsActive = Schema::hasColumn('galleries', 'is_active');
        $hasPlacement = Schema::hasColumn('galleries', 'placement');

        Schema::table('galleries', function (Blueprint $table) use ($hasIsActive, $hasPlacement) {
            if ($hasIsActive) {
                $table->dropColumn('is_active');
            }

            if ($hasPlacement) {
                $table->dropColumn('placement');
            }
        });
    }
};
