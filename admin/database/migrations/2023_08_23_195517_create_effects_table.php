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
        Schema::create('effects', function (Blueprint $table) {
            $table->id();
            $table->string('name', 52);
            $table->tinyText('description');
            $table->string('profile_img');
            $table->enum('type', ['permanent', 'action']);
            $table->enum('direction', ['self', 'opponent']);
            $table->enum('fire_on_event', ['start', 'end', 'b4PlayerAct', 'afterPlayerAct', 'now', 'custom']);
            $table->tinyInteger('value')->unsigned();
            $table->enum('scale', ['point', 'percent']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('effects');
    }
};
