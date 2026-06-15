<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
   public function up(): void
{
    Schema::create('pedido_producto', function (Blueprint $table) {
        $table->id(); // <-- REVISÁ QUE DIGA ASÍ, SOLITO, SIN SIGNOS RAROS
        
        $table->unsignedBigInteger('pedido_id');
        $table->foreign('pedido_id')->references('id')->on('pedidos')->onDelete('cascade');
        
        $table->unsignedBigInteger('producto_id');
        $table->foreign('producto_id')->references('id')->on('productos')->onDelete('cascade');
        
        $table->integer('cantidad');
        $table->decimal('precio_unitario', 10, 2);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedido_producto');
    }
};
