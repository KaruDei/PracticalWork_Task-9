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
        Schema::create('comments', function (Blueprint $table) {
			  $table -> id();
			  $table -> bigInteger('profile_id') -> unsigned();
			  $table -> foreign('profile_id') -> references('id') -> on('users') -> cascadeOnDelete();
			  $table -> bigInteger('user_id') -> unsigned();
			  $table -> foreign('user_id') -> references('id') -> on('users') -> cascadeOnDelete();
			  $table -> bigInteger('comment_id') -> unsigned() -> nullable();
			  $table -> foreign('comment_id') -> references('id') -> on('comments') -> cascadeOnDelete();
			  $table -> string('title');
			  $table -> text('text');
			  $table -> timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comments');
    }
};
