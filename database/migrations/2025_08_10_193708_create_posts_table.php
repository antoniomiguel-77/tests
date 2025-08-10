<?php

use App\Models\Dislike;
use App\Models\Like;
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
        if(Schema::hasTable('posts')) return;
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title',255)->nullable();
            $table->text('post')->nullable();
            $table->string('image',255)->nullable();
            $table->foreignIdFor(User::class)->nullable();
            $table->foreignIdFor(Like::class)->nullable();
            $table->foreignIdFor(Dislike::class)->nullable();
            $table->softDeletes();
            $table->timestamps();
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
