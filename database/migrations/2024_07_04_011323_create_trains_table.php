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

            $table->string('Azienda', 200);
            $table->string('Stazione di partenza', 200);
            $table->string('Stazione di arrivo', 200);
            $table->dateTime('Orario di partenza', $precision = 0);
            $table->dateTime('Orario di arrivo', $precision = 0);
            $table->decimal('Codice treno', 8);
            $table->decimal('Numero di carozze', 3);
            $table->text('In orario');
            $table->text('Cancellato');

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
