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
        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('id')->references('users')->on('id')->onDelete('cascade')->onUpdate('cascade');

        });

        Schema::table('users', function (Blueprint $table) {
            $table->foreign('id')->references('admin_id')->on('merchants')->onDelete('cascade')->onUpdate('cascade');

        });

        Schema::table('users', function (Blueprint $table) {
            $table->foreign('country_code')->references('countries')->on('code')->onDelete('cascade')->onUpdate('cascade');

        });
        Schema::table('countries', function (Blueprint $table) {
            $table->foreign('code')->references('merchants')->on('country_code')->onDelete('cascade')->onUpdate('cascade');

        });
        Schema::table('merchants', function (Blueprint $table) {
            $table->foreign('id')->references('products')->on('merchants_id')->onDelete('cascade')->onUpdate('cascade');

        });
        Schema::table('products', function (Blueprint $table) {
            $table->foreign('id')->references('order_items')->on('products_id')->onDelete('cascade')->onUpdate('cascade');

        });
        Schema::table('order_items', function (Blueprint $table) {
            $table->foreign('order_id')->references('orders')->on('id')->onDelete('cascade')->onUpdate('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('migration');
    }
};
