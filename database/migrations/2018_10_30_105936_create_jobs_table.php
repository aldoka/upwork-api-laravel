<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateJobsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('jobs', function(Blueprint $table)
		{
			$table->char('id', 19)->primary();
			$table->string('category2', 64)->nullable();
			$table->string('subcategory2', 64)->nullable();
			$table->char('job_type', 6);
			$table->decimal('budget', 10, 0)->unsigned()->nullable();
			$table->string('duration', 32)->nullable();
			$table->string('workload', 32)->nullable();
			$table->string('job_status', 10)->nullable();
			$table->char('date_created', 24);
			$table->string('url', 64);
			$table->string('title', 128)->nullable();
			$table->string('snippet', 1024)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('jobs');
	}

}
