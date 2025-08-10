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
        if(Schema::hasTable('postdislikess')) return;
        Schema::create('dislikes', function (Blueprint $table) {
            $table->id();
            $table->decimal('likecounter', 65, 2)->nullable();
            $table->foreignIdFor(User::class)->nullable();
            $table->foreignIdFor(Comment::class)->nullable();
            $table->foreignIdFor(Post::class)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dislikes');
    }
};
