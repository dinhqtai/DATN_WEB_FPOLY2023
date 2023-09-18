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
        Schema::create('actors', function (Blueprint $table) {
            $table->id();
            $table->string('actor_name');
            $table->tinyInteger('gender');
            $table->unsignedBigInteger('movie_id');
            $table->tinyInteger('role');
            $table->string('movie_role');
            $table->timestamps();
            $table->foreign('movie_id')->references('id')->on('movies');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('actors');
    }
};
