<?php

use Illuminate\Database\Migrations\Migration;

class CreateProjectImagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('project_images', function($table){
			$table->increments('id');
			$table->string('project_id');
			$table->string('image');
			$table->string('title');
			$table->string('caption');
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
		Schema::drop('project_images');
	}

}