<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('image')->nullable();
            $table->string('image_2')->nullable();
            $table->string('banner_image')->nullable();
            $table->string('flag_image')->nullable();
            $table->longText('short_description')->nullable();
            $table->longText('description')->nullable();
            $table->longText('quick_facts')->nullable();
            $table->longText('why_study')->nullable();
            $table->longText('living')->nullable();
            $table->longText('money_matters')->nullable();
            $table->longText('visa_process')->nullable();
            $table->longText('arrival_accommodation')->nullable();
            $table->longText('employment_prospects')->nullable();
            $table->string('slug')->nullable();
            $table->string('order')->nullable();
            $table->boolean('status')->default(0);

            $table->string('seo_title')->nullable();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
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
        Schema::dropIfExists('countries');
    }
}
