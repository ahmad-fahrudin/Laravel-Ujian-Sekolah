<?php

use App\Models\Option;
use App\Models\Result;
use App\Models\Question;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('question_result', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Result::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Question::class)->constrained()->cascadeOnDelete();
            $table->foreignIdFor(Option::class)->nullable()->constrained()->cascadeOnDelete();
            $table->integer('points')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('question_result');
    }
};
