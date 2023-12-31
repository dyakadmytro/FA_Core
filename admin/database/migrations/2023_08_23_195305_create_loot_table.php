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
        Schema::create('loot', function (Blueprint $table) {
            $table->id();
            $table->string('name', 52);
            $table->smallInteger('health')->unsigned();
            $table->smallInteger('wear')->unsigned();
            $table->tinyText('description');
            $table->enum('type', ['ARMOUR', 'WEAPON', 'GLOVES', 'BOOTS', 'RING', 'CLOAK', 'HELMET', 'PENDANT', 'AMULET', 'POTION', 'SCROLL']);
            $table->boolean('can_be_repaired');
            $table->string('profile_img');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loot');
    }
};
