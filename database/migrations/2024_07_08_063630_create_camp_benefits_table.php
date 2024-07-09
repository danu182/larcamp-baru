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
        Schema::create('camp_benefits', function (Blueprint $table) {
            $table->id();
            
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('camp_id')->unsigned();
            
            $table->string('card_number', 20);
            $table->date('expire');

            $table->string('cvc', 3);

            $table->boolean('is_paid')->default('false');

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('camp_id')->references('id')->on('camps')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('camp_benefits');
        
    }
};
