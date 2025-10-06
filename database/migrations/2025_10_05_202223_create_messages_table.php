<?php

// database/migrations/..._create_messages_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
public function up(): void
{
    Schema::create('messages', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('email');
        $table->string('subject'); // <-- DIUBAH DI SINI
        $table->text('message');
        $table->timestamps();
    });
}

    public function down(): void
    {
        Schema::dropIfExists('messages');
    }
};
