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
        Schema::create('restaurants', static function (Blueprint $table): void {
            $table->id();
            $table->foreignId('user_id')
                ->references('id')
                ->on('users');
            $table->string('title', 255);
            $table->string('image', 255)->nullable();
            $table->text('description')->nullable();
            $table->text('address');
            $table->string('phone_number', 191)->nullable();
            $table->string('web_site', 191)->nullable();
            $table->boolean('is_active')->default(false);
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
        Schema::dropIfExists('restaurants');
    }
};
