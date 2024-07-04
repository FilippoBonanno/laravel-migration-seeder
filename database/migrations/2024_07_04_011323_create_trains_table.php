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

            $table->string('azienda', 200);
            $table->string('stazione_di_partenza', 200);
            $table->string('stazione_di_arrivo', 200);
            $table->dateTime('orario_di_partenza', $precision = 0);
            $table->dateTime('orario_di_arrivo', $precision = 0);
            $table->decimal('codice_treno', 8);
            $table->decimal('numero_di_carozze', 3);
            $table->text('in_orario');
            $table->text('cancellato');

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
