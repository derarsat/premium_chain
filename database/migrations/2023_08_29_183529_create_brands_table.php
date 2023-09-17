<?php

use App\Models\Brand;
use App\Models\Country;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBrandsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Brands
        Schema::create('brands', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('selling_point_description');
            $table->string('menu_description');
            $table->string('color');
            $table->string('logo')->nullable();
            $table->string('hero_image')->nullable();
            $table->string('menu_image')->nullable();
            $table->string('selling_point_image')->nullable();
            $table->string('page_background')->nullable();
            $table->string('page_logo')->nullable();
            $table->string('rating_icon')->nullable();
            $table->string('footer_image')->nullable();
            $table->timestamps();
        });
        // Atmosphere
        Schema::create('brand_atmosphere_images', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Brand::class);
            $table->string('image');
            $table->timestamps();
        });
        // Area
        Schema::create('areas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('lat');
            $table->string('lng');
            $table->foreignIdFor(Brand::class);
            $table->foreignIdFor(Country::class);
            $table->timestamps();
        });
        // Country
        Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
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
        Schema::dropIfExists('brands');
        Schema::dropIfExists('brand_atmosphere_image');
    }
}
