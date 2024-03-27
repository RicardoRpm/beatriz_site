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
        Schema::create('recruitment', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->date('bird_day');
            $table->string('address');
            $table->string('province');
            $table->string('email');
            $table->string('phone');
            $table->string('phone_alternative')->nullable();
            $table->string('academic_degree');
            $table->string('function_want');
            $table->string('ocupation1');
            $table->string('ocupation2')->nullable();
            $table->string('ocupation3')->nullable();
            $table->integer('year_of_expirience');
            $table->decimal('salary_want');
            $table->string('how_find_us');
            $table->string('onshore_offshore');
            $table->boolean('informatic');
            $table->boolean('portuguese');
            $table->boolean('english');
            $table->boolean('french');
            $table->boolean('bst');
            $table->boolean('huet');
            $table->boolean('maritime_note');
            $table->boolean('offshore_expirience');
            $table->boolean('active', $default = true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recruitment');
    }
};
