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
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('city')->default('Addis Ababa')->nullable();
            $table->string('country')->default('Ethiopia')->nullable();
            $table->string('category')->default('Default')->nullable();
            $table->string('budget')->nullable();
            $table->string('quote')->nullable();
            $table->longtext('description')->nullable();
            $table->Boolean('isActive')->default(1);
            $table->Boolean('featured')->default(0);
            $table->integer('postedBy')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news');
    }
};
