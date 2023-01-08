<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('cuisines', static function (Blueprint $table): void {
            $table->id();
            $table->foreignId('restaurant_id')
                ->references('id')
                ->on('restaurants');

            $table->string('title', 255)->nullable();
            $table->string('image', 191)->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('cuisines');
    }
};
