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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->String("name")->unique()->nullable(false);
            $table->String("details")->nullable(false);
            $table->text("description")->nullable(false);
            $table->text("brand")->nullable(false);
            $table->double("price")->nullable(false);
            $table->double("shipping_cost");
            $table->String("image_path");
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
        Schema::dropIfExists('products');
    }
};
