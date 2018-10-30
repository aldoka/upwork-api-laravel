<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDetailedJobsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('detailed_jobs', function(Blueprint $table)
		{
			$table->char('id', 19)->primary();
			$table->string('op_title', 128);
			$table->string('op_description', 5000);
			$table->string('job_category_level_one', 64);
			$table->string('job_category_level_two', 64);
			$table->char('job_type', 6);
			$table->decimal('amount', 10, 0)->unsigned()->nullable();
			$table->boolean('op_contractor_tier')->nullable();
			$table->decimal('op_pref_hourly_rate_max', 10, 0)->unsigned()->nullable();
			$table->float('op_pref_fb_score', 10, 0)->unsigned()->nullable();
			$table->unsignedSmallInteger('op_pref_odesk_hours')->nullable();
			$table->unsignedSmallInteger('op_pref_hourly_rate_min')->nullable();
			$table->boolean('op_pref_english_skill')->nullable();
			$table->boolean('op_pref_has_portfolio')->nullable();
			$table->string('op_pref_location', 128)->nullable();
			$table->integer('op_ctime')->unsigned();
			$table->string('op_engagement', 64)->nullable();
			$table->string('engagement_weeks', 32)->nullable();
			$table->boolean('op_cny_upm_verified')->nullable();
			$table->char('ui_opening_status', 6)->nullable();
			$table->unsignedSmallInteger('op_tot_feedback')->nullable();
			$table->boolean('op_is_cover_letter_required')->nullable();
			$table->string('op_attached_doc', 256)->nullable();
			$table->float('op_high_hourly_rate_all', 10, 0)->unsigned()->nullable();
			$table->float('op_low_hourly_rate_all', 10, 0)->unsigned()->nullable();
			$table->unsignedSmallInteger('op_tot_intv')->nullable();
			$table->unsignedSmallInteger('op_tot_cand')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('detailed_jobs');
	}

}
