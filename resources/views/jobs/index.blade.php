@extends('layouts.app')

@section('content')

    @if(Session::has('success_message'))
        <div class="alert alert-success">
            <span class="glyphicon glyphicon-ok"></span>
            {!! session('success_message') !!}

            <button type="button" class="close" data-dismiss="alert" aria-label="close">
                <span aria-hidden="true">&times;</span>
            </button>

        </div>
    @endif

    <div class="panel panel-default">

        <div class="panel-heading clearfix">

            <div class="pull-left">
                <h4 class="mt-5 mb-5">Jobs</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('jobs.job.create') }}" class="btn btn-success" title="Create New Job">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($jobs) == 0)
            <div class="panel-body text-center">
                <h4>No Jobs Available!</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Category2</th>
                            <th>Subcategory2</th>
                            <th>Job Type</th>
                            <th>Budget</th>
                            <th>Duration</th>
                            <th>Workload</th>
                            <th>Job Status</th>
                            <th>Date Created</th>
                            <th>Url</th>
                            <th>Title</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($jobs as $job)
                        <tr>
                            <td>{{ $job->category2 }}</td>
                            <td>{{ $job->subcategory2 }}</td>
                            <td>{{ $job->job_type }}</td>
                            <td>{{ $job->budget }}</td>
                            <td>{{ $job->duration }}</td>
                            <td>{{ $job->workload }}</td>
                            <td>{{ $job->job_status }}</td>
                            <td>{{ $job->date_created }}</td>
                            <td>{{ $job->url }}</td>
                            <td>{{ $job->title }}</td>

                            <td>

                                <form method="POST" action="{!! route('jobs.job.destroy', $job->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('jobs.job.show', $job->id ) }}" class="btn btn-info" title="Show Job">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('jobs.job.edit', $job->id ) }}" class="btn btn-primary" title="Edit Job">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Job" onclick="return confirm(&quot;Delete Job?&quot;)">
                                            <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                                        </button>
                                    </div>

                                </form>
                                
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>

        <div class="panel-footer">
            {!! $jobs->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection