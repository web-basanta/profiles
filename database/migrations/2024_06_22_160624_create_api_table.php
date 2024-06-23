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
        Schema::create('api', function (Blueprint $table) {
            $table->id();
            $table->string('p_id')->nullable()->default(null);
            $table->longText('p_hash_kay')->nullable()->default(null);
            $table->string('p_name')->nullable()->default(null);
            $table->longText('p_description')->nullable()->default(null);
            $table->longText('p_url')->nullable()->default(null);
            $table->string('p_theme_id')->nullable()->default(null);
            $table->string('p_version')->nullable()->default(null);
            $table->string('p_theme_name')->nullable()->default(null);
            $table->string('p_type')->nullable()->default(null);
            $table->string('p_status')->nullable()->default(null);
            $table->string('p_created_at')->nullable()->default(null);
            $table->string('p_updated_at')->nullable()->default(null);
            $table->string('user_id')->nullable()->default(null);
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
        Schema::dropIfExists('api');
    }
};
