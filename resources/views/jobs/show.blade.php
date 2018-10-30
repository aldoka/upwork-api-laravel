@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($job->title) ? $job->title : 'Job' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('jobs.job.destroy', $job->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('jobs.job.index') }}" class="btn btn-primary" title="Show All Job">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('jobs.job.create') }}" class="btn btn-success" title="Create New Job">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('jobs.job.edit', $job->id ) }}" class="btn btn-primary" title="Edit Job">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Job" onclick="return confirm(&quot;Delete Job??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Category2</dt>
            <dd>{{ $job->category2 }}</dd>
            <dt>Subcategory2</dt>
            <dd>{{ $job->subcategory2 }}</dd>
            <dt>Job Type</dt>
            <dd>{{ $job->job_type }}</dd>
            <dt>Budget</dt>
            <dd>{{ $job->budget }}</dd>
            <dt>Duration</dt>
            <dd>{{ $job->duration }}</dd>
            <dt>Workload</dt>
            <dd>{{ $job->workload }}</dd>
            <dt>Job Status</dt>
            <dd>{{ $job->job_status }}</dd>
            <dt>Date Created</dt>
            <dd>{{ $job->date_created }}</dd>
            <dt>Url</dt>
            <dd>{{ $job->url }}</dd>
            <dt>Title</dt>
            <dd>{{ $job->title }}</dd>
            <dt>Snippet</dt>
            <dd>{{ $job->snippet }}</dd>

        </dl>

    </div>
</div>

@endsection