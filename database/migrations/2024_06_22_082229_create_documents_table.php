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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_folder')->nullable();
            $table->foreign('fk_folder')->references('id')->on('folders')->onDelete('cascade');
            $table->unsignedBigInteger('fk_user')->nullable();
            $table->foreign('fk_user')->references('id')->on('users')->onDelete('cascade');
            $table->string('name')->nullable();
            $table->string('comment')->nullable();
            $table->string('defaultAccess')->default('1')->comment('1-All Permission | 2-Read/Write Permission | 3-Read Permission | 4-No Access');
            $table->date('expired_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
