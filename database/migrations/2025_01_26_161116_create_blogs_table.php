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
        Schema::create('blogs', function (Blueprint $table) {
            $table->id();
            $table->string("slug");
            $table->string("title");
            $table->foreignId("category_id");
            $table->string('description')->nullable();
            $table->foreignId('user_id')->nullable();
            $table->longText('content')->nullable();
            $table->date("published_at")->nullable();
            $table->date("is_published")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blogs');
    }
};
