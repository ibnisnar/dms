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
        Schema::create('document_contents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_document')->nullable();
            $table->foreign('fk_document')->references('id')->on('documents')->onDelete('cascade');
            $table->string('dir')->nullable();
            $table->string('filename')->nullable();
            $table->string('filetype')->nullable();
            $table->string('mimetype')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('document_contents');
    }
};
