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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description');
            $table->string('short_description');
            $table->longText('content');
            $table->string('image');
            $table->string('seo_title');
            $table->string('seo_desc');
            $table->enum('status', ['pending', 'published'])->default('pending');
            $table->timestamps();
            $table->bigInteger('comment_id')->nullable()->unsigned();
            $table->foreign('comment_id')->references('id')->on('comments')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }


};
