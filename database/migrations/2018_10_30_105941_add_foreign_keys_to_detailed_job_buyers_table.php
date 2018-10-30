<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDetailedJobBuyersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('detailed_job_buyers', function(Blueprint $table)
		{
			$table->foreign('detailed_jobs_id', 'detailed_job_buyers_ibfk_1')->references('id')->on('detailed_jobs')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('detailed_job_buyers', function(Blueprint $table)
		{
			$table->dropForeign('detailed_job_buyers_ibfk_1');
		});
	}

}
