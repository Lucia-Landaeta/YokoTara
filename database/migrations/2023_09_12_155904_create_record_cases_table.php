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
        Schema::create('record_cases', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->enum('situation',['En adopción','Perdido','Encontrado','Castración','Recuperado','Adoptado','Control', 'Interés aceptado', 'Interés rechazado','Cerrado']);
            $table->string('observation');
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null');
            $table->foreignId('case_animal_id')->constrained()->onDelete('cascade');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('record_cases');
    }
};
