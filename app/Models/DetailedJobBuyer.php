<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailedJobBuyer extends Model
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
    protected $table = 'detailed_job_buyers';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
                  'op_contract_date',
                  'op_timezone',
                  'op_country',
                  'op_city',
                  'op_state',
                  'op_tot_asgs',
                  'op_tot_charge',
                  'op_tot_hours',
                  'op_tot_jobs_filled',
                  'op_tot_jobs_open',
                  'op_tot_jobs_posted',
                  'op_tot_fp_asgs',
                  'op_adjusted_score',
                  'detailed_jobs_id'
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
     * Get the detailedJob for this model.
     */
    public function detailedJob()
    {
        return $this->belongsTo('App\Models\DetailedJob','detailed_jobs_id','id');
    }



}
