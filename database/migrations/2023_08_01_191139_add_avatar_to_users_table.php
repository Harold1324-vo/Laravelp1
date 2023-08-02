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
            /*En este migración se pueden agregar columnas a la tabla después de migrarla.
                Se agrega el método nullable() para que no de error al agregar la columna a la tabla con registros.
                El método after('') coloca la columna nueva delante de la especificada.*/
            $table->string('avatar')->nullable()->after('email');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropColumn('avatar');
        });
    }
};
