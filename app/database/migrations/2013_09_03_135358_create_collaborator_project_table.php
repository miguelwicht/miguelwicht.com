<?php

use Illuminate\Database\Migrations\Migration;

class CreateCollaboratorProjectTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('collaborator_project', function($table){
			$table->string('collaborator_id');
			$table->string('project_id');
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
		Schema::drop('collaborator_project');
	}

}