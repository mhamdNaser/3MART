<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('service_category_id')->references('id')->on('service_categories')->onDelete('cascade');
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('tagline');
            $table->decimal('price');
            $table->decimal('discount')->nullable();
            $table->enum('discount_type',['fixed', 'percent'])->nullable();
            $table->string('image')->nullable();
            $table->string('thumbnail')->nullable();
            $table->longtext('description')->nullable();
            $table->longtext('inclusion')->nullable();
            $table->longtext('exclusion')->nullable();
            $table->boolean('status')->default(true);
            $table->timestamps();       
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
};
