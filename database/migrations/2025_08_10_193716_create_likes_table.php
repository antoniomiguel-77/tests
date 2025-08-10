<?php

use App\Models\Comment;
use App\Models\Post;
use App\Models\User;
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
        if(Schema::hasTable('likes')) return;
        Schema::create('likes', function (Blueprint $table) {
            $table->id();
            $table->decimal('dislikecounter',65,2)->nullable();
            $table->foreignIdFor(User::class)->nullable();
            $table->foreignIdFor(Comment::class)->nullable();
            $table->foreignIdFor(Post::class)->nullable();
            $table->softDeletes();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('likes');
    }
};
