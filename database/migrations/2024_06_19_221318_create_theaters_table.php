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
        Schema::create('theaters', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity_employees'); //cantidad de empleados
            $table->text('code_employee');
            $table->string('name_employee');
            $table->text('category_employee');
            $table->foreignId('movie_ticket_id')->constrained()->nullable();
            $table->foreignId('rent_id')->constrained()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('theaters');
    }
};
