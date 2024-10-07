<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('ads', function (Blueprint $table) {
            $table->id();
            $table->string('ad_position'); // Reklamın sayfa üzerindeki konumu (header, footer, sidebar gibi)
            $table->text('ad_code'); // Google AdSense kodunu saklamak için
            $table->boolean('is_active')->default(true); // Reklamın aktif olup olmadığını belirtmek için
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ads');
    }
};
