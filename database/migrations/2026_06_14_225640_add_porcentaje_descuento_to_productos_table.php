<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddPorcentajeDescuentoToProductosTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('productos', function (Blueprint $table) {
            // Agregamos la columna. Le ponemos default(0) para que los productos viejos no queden vacíos
            $table->integer('porcentaje_descuento')->default(0)->after('precio');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('productos', function (Blueprint $table) {
            // Si tiramos la migración para atrás, borramos la columna
            $table->dropColumn('porcentaje_descuento');
        });
    }
}