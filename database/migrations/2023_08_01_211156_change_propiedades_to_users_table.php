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
        Schema::table('users', function (Blueprint $table) {
            //Actualización del tamaño de name a 150 y específicando que puede estar nulo ese valor
            $table->string('name', 150)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //Eliminación del tamaño de name que es de 255 y especificando que no debe ser nulo
            $table->string('name', 255)->nullable(false)->change();
        });
    }
};
