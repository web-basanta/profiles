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
            $table->longText('name');
            $table->integer('phone_one');
            $table->integer('phone_two');
            $table->longText('address');
            $table->string('gender');
            $table->text('links');
            $table->string('email');
            $table->text('basicinfo');
            $table->longText('workExp');
            $table->longText('education');
            $table->longText('skills');
            $table->longText('interests');
            $table->longText('otherinfo');
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
