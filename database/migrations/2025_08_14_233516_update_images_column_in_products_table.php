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
        Schema::table('products', function (Blueprint $table) {
            // Hapus kolom 'image' yang lama jika ada
            if (Schema::hasColumn('products', 'image')) {
                $table->dropColumn('image');
            }
            
            // Tambahkan kolom 'images' baru dengan tipe JSON
            $table->json('images')->nullable()->after('price');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            // Hapus kolom 'images' baru saat rollback
            if (Schema::hasColumn('products', 'images')) {
                $table->dropColumn('images');
            }

            // Tambahkan kembali kolom 'image' yang lama
            $table->string('image')->nullable()->after('price');
        });
    }
};
