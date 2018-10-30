<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailedJob extends Model
{
    
    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'detailed_jobs';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';
    protected $keyType = 'string';
    public $incrementing = false;


    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'id',
                  'op_title',
                  'op_description',
                  'job_category_level_one',
                  'job_category_level_two',
                  'job_type',
                  'amount',
                  'op_contractor_tier',
                  'op_pref_hourly_rate_max',
                  'op_pref_fb_score',
                  'op_pref_odesk_hours',
                  'op_pref_hourly_rate_min',
                  'op_pref_english_skill',
                  'op_pref_has_portfolio',
                  'op_pref_location',
                  'op_ctime',
                  'op_engagement',
                  'engagement_weeks',
                  'op_cny_upm_verified',
                  'ui_opening_status',
                  'op_tot_feedback',
                  'op_is_cover_letter_required',
                  'op_attached_doc',
                  'op_high_hourly_rate_all',
                  'op_low_hourly_rate_all',
                  'op_tot_intv',
                  'op_tot_cand'
              ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [];
    
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];
    
    /**
     * Get the assignmentInfo for this model.
     */
    public function assignmentInfo()
    {
        return $this->hasOne('App\Models\AssignmentInfo','detailed_jobs_id','id');
    }

    /**
     * Get the detailedJobAdditionalQuestion for this model.
     */
    public function detailedJobAdditionalQuestion()
    {
        return $this->hasOne('App\Models\DetailedJobAdditionalQuestion','detailed_job_id','id');
    }

    /**
     * Get the detailedJobAssignmnent for this model.
     */
    public function detailedJobAssignmnent()
    {
        return $this->hasOne('App\Models\DetailedJobAssignmnent','detailed_job_id','id');
    }

    /**
     * Get the detailedJobBuyer for this model.
     */
    public function detailedJobBuyer()
    {
        return $this->hasOne('App\Models\DetailedJobBuyer','detailed_jobs_id','id');
    }

    /**
     * Get the detailedJobCandidate for this model.
     */
    public function detailedJobCandidate()
    {
        return $this->hasOne('App\Models\DetailedJobCandidate','detailed_job_id','id');
    }

    /**
     * Get the detailedJobSkill for this model.
     */
    public function detailedJobSkill()
    {
        return $this->hasOne('App\Models\DetailedJobSkill','detailed_job_id','id');
    }

    /**
     * Get the jobLink for this model.
     */
    public function jobLink()
    {
        return $this->hasOne('App\Models\JobLink','id','id');
    }



}
