<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobClients extends Model
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
    protected $table = 'job_clients';

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
                  'country',
                  'feedback',
                  'reviews_count',
                  'jobs_posted',
                  'past_hires',
                  'payment_verification_status',
                  'jobs_id'
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
     * Get the job for this model.
     */
    public function job()
    {
        return $this->belongsTo('App\Models\Job','jobs_id','id');
    }



}
