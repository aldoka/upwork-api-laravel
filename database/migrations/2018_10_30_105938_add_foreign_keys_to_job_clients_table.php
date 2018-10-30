<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToJobClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('job_clients', function(Blueprint $table)
		{
			$table->foreign('jobs_id', 'job_clients_ibfk_1')->references('id')->on('jobs')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('job_clients', function(Blueprint $table)
		{
			$table->dropForeign('job_clients_ibfk_1');
		});
	}

}
