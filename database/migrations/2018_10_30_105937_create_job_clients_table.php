<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobClientsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('job_clients', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('country', 64);
			$table->float('feedback', 10, 0)->nullable();
			$table->unsignedSmallInteger('reviews_count')->nullable();
			$table->unsignedSmallInteger('jobs_posted')->nullable();
			$table->unsignedSmallInteger('past_hires')->nullable();
			$table->char('payment_verification_status', 8)->nullable();
			$table->char('jobs_id', 19)->index('jobs_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('job_clients');
	}

}
