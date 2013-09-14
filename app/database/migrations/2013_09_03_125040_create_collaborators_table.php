<?php

use Illuminate\Database\Migrations\Migration;

class CreateCollaboratorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('collaborators', function($table){
			$table->increments('id');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('website');
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
		Schema::drop('collaborators');
	}

}