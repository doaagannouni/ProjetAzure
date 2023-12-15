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
    Schema::create('password_reset_tokens', function (Blueprint $table) {
        $table->string('email');  // Remove the ->primary() here
        $table->string('token');
        $table->timestamp('created_at')->nullable();

        // If 'id' doesn't exist, you can create it as the primary key
        $table->primary('email');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('password_reset_tokens');
    }
};
