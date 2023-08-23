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
        Schema::create('hero_data', function (Blueprint $table) {
            $table->foreignId('hero_id')->constrained();
            $table->string('name', 52);
            $table->string('nick', 24)->nullable();
            $table->tinyText('description');
            $table->string('profile_img');
            $table->smallInteger('health');
            $table->smallInteger('strength');
            $table->smallInteger('agility');
            $table->smallInteger('luck');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hero_data');
    }
};
