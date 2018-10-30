@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Job Clients' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('job_clients.job_clients.destroy', $jobClients->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('job_clients.job_clients.index') }}" class="btn btn-primary" title="Show All Job Clients">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('job_clients.job_clients.create') }}" class="btn btn-success" title="Create New Job Clients">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('job_clients.job_clients.edit', $jobClients->id ) }}" class="btn btn-primary" title="Edit Job Clients">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Job Clients" onclick="return confirm(&quot;Delete Job Clients??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Country</dt>
            <dd>{{ $jobClients->country }}</dd>
            <dt>Feedback</dt>
            <dd>{{ $jobClients->feedback }}</dd>
            <dt>Reviews Count</dt>
            <dd>{{ $jobClients->reviews_count }}</dd>
            <dt>Jobs Posted</dt>
            <dd>{{ $jobClients->jobs_posted }}</dd>
            <dt>Past Hires</dt>
            <dd>{{ $jobClients->past_hires }}</dd>
            <dt>Payment Verification Status</dt>
            <dd>{{ $jobClients->payment_verification_status }}</dd>
            <dt>Jobs</dt>
            <dd>{{ optional($jobClients->job)->title }}</dd>

        </dl>

    </div>
</div>

@endsection