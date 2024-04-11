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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->longText('name')->nullable()->default(null);
            $table->string('phone_one')->nullable()->default(null);
            $table->string('phone_two')->nullable()->default(null);
            $table->longText('address')->nullable()->default(null);
            $table->string('gender')->nullable()->default(null);
            $table->text('links')->nullable()->default(null);
            $table->string('email')->nullable()->default(null);
            $table->text('basicinfo')->nullable()->default(null);
            $table->longText('workExp')->nullable()->default(null);
            $table->longText('education')->nullable()->default(null);
            $table->longText('skills')->nullable()->default(null);
            $table->longText('interests')->nullable()->default(null);
            $table->longText('otherinfo')->nullable()->default(null);
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
        Schema::dropIfExists('profiles');
    }
};
