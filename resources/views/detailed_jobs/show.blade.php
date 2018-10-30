@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Detailed Job' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('detailed_jobs.detailed_job.destroy', $detailedJob->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('detailed_jobs.detailed_job.index') }}" class="btn btn-primary" title="Show All Detailed Job">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('detailed_jobs.detailed_job.create') }}" class="btn btn-success" title="Create New Detailed Job">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('detailed_jobs.detailed_job.edit', $detailedJob->id ) }}" class="btn btn-primary" title="Edit Detailed Job">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Detailed Job" onclick="return confirm(&quot;Delete Detailed Job??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Op Title</dt>
            <dd>{{ $detailedJob->op_title }}</dd>
            <dt>Op Description</dt>
            <dd>{{ $detailedJob->op_description }}</dd>
            <dt>Job Category Level One</dt>
            <dd>{{ $detailedJob->job_category_level_one }}</dd>
            <dt>Job Category Level Two</dt>
            <dd>{{ $detailedJob->job_category_level_two }}</dd>
            <dt>Job Type</dt>
            <dd>{{ $detailedJob->job_type }}</dd>
            <dt>Amount</dt>
            <dd>{{ $detailedJob->amount }}</dd>
            <dt>Op Contractor Tier</dt>
            <dd>{{ $detailedJob->op_contractor_tier }}</dd>
            <dt>Op Pref Hourly Rate Max</dt>
            <dd>{{ $detailedJob->op_pref_hourly_rate_max }}</dd>
            <dt>Op Pref Fb Score</dt>
            <dd>{{ $detailedJob->op_pref_fb_score }}</dd>
            <dt>Op Pref Odesk Hours</dt>
            <dd>{{ $detailedJob->op_pref_odesk_hours }}</dd>
            <dt>Op Pref Hourly Rate Min</dt>
            <dd>{{ $detailedJob->op_pref_hourly_rate_min }}</dd>
            <dt>Op Pref English Skill</dt>
            <dd>{{ $detailedJob->op_pref_english_skill }}</dd>
            <dt>Op Pref Has Portfolio</dt>
            <dd>{{ ($detailedJob->op_pref_has_portfolio) ? 'Yes' : 'No' }}</dd>
            <dt>Op Pref Location</dt>
            <dd>{{ $detailedJob->op_pref_location }}</dd>
            <dt>Op Ctime</dt>
            <dd>{{ $detailedJob->op_ctime }}</dd>
            <dt>Op Engagement</dt>
            <dd>{{ $detailedJob->op_engagement }}</dd>
            <dt>Engagement Weeks</dt>
            <dd>{{ $detailedJob->engagement_weeks }}</dd>
            <dt>Op Cny Upm Verified</dt>
            <dd>{{ ($detailedJob->op_cny_upm_verified) ? 'Yes' : 'No' }}</dd>
            <dt>Ui Opening Status</dt>
            <dd>{{ $detailedJob->ui_opening_status }}</dd>
            <dt>Op Tot Feedback</dt>
            <dd>{{ $detailedJob->op_tot_feedback }}</dd>
            <dt>Op Is Cover Letter Required</dt>
            <dd>{{ ($detailedJob->op_is_cover_letter_required) ? 'Yes' : 'No' }}</dd>
            <dt>Op Attached Doc</dt>
            <dd>{{ $detailedJob->op_attached_doc }}</dd>
            <dt>Op High Hourly Rate All</dt>
            <dd>{{ $detailedJob->op_high_hourly_rate_all }}</dd>
            <dt>Op Low Hourly Rate All</dt>
            <dd>{{ $detailedJob->op_low_hourly_rate_all }}</dd>
            <dt>Op Tot Intv</dt>
            <dd>{{ $detailedJob->op_tot_intv }}</dd>
            <dt>Op Tot Cand</dt>
            <dd>{{ $detailedJob->op_tot_cand }}</dd>

        </dl>

    </div>
</div>

@endsection