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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('azienda',20);
            $table->string('stazione_partenza',50);
            $table->string('stazione_arrivo',50);
            $table->string('orario_partenza');
            $table->string('orario_arrivo');
            $table->tinyInteger('codice_treno');
            $table->tinyInteger('n_carrozze');
            $table->tinyInteger('in_orario')->default(1);
            $table->tinyInteger('cancellato')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
