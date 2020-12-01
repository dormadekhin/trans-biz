<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rate_items', function (Blueprint $table) {
            $table->id();
	        $table->foreignId('city_from_id');
	        $table->foreignId('city_to_id');
	        $table->float('weight_from')->nullable();
	        $table->float('weight_to')->nullable();
	        $table->float('volume_from')->nullable();
	        $table->float('volume_to')->nullable();
	        $table->float('price', 8, 2);
            $table->timestamps();
	        $table->softDeletes();

	        $table->foreign('city_from_id')->references('id')->on('cities');
	        $table->foreign('city_to_id')->references('id')->on('cities');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rate_items');
    }
}
