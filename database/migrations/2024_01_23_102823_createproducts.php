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
        schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->integer('merchant_id');
            $table->integer('quantity');
            $table->string('name');
            $table->integer('price');
            $table->string('status');
            $table->timestamp('created_at');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }

};
?>
