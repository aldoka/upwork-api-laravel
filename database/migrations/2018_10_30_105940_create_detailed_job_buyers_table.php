<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDetailedJobBuyersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detailed_job_buyers', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('op_contract_date', 20)->nullable();
			$table->string('op_timezone', 64)->nullable();
			$table->string('op_country', 64);
			$table->string('op_city', 64)->nullable();
			$table->char('op_state', 2)->nullable();
			$table->unsignedSmallInteger('op_tot_asgs')->nullable();
			$table->float('op_tot_charge', 10, 0)->nullable();
			$table->float('op_tot_hours', 10, 0)->nullable();
			$table->unsignedSmallInteger('op_tot_jobs_filled')->nullable();
			$table->unsignedSmallInteger('op_tot_jobs_open')->nullable();
			$table->unsignedSmallInteger('op_tot_jobs_posted')->nullable();
			$table->unsignedSmallInteger('op_tot_fp_asgs')->nullable();
			$table->float('op_adjusted_score', 10, 0)->nullable();
			$table->char('detailed_jobs_id', 19)->index('detailed_jobs_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('detailed_job_buyers');
	}

}
