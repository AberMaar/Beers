<?php

use Illuminate\Database\Migrations\Migration;

class CreateBeersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
	    Schema::create('beers', function($table) {
	        $table->increments('id');
	        $table->string('name', 128);
	        $table->string('brewery', 128);
	        $table->string('description', 256)->nullable();
	        $table->decimal('volume',3,2);
	        $table->decimal('alcohol',3,1);
	        $table->decimal('price',4,2);
	    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('beers');
	}

}