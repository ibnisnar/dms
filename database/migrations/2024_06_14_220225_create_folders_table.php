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
        Schema::create('folders', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('fk_folder')->nullable();
            $table->foreign('fk_folder')->references('id')->on('folders')->onDelete('cascade');
            $table->unsignedBigInteger('fk_user')->nullable();
            $table->foreign('fk_user')->references('id')->on('users')->onDelete('cascade');
            $table->string('name');
            $table->string('comment');
            $table->string('defaultAccess')->default('0')->comment('0-All Permission | 1-Read/Write Permission | 2-Read Permission | 3-No Access');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('folders');
    }
};
