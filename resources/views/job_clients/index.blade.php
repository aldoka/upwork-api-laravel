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
                <h4 class="mt-5 mb-5">Job Clients</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('job_clients.job_clients.create') }}" class="btn btn-success" title="Create New Job Clients">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($jobClientsObjects) == 0)
            <div class="panel-body text-center">
                <h4>No Job Clients Available!</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Country</th>
                            <th>Feedback</th>
                            <th>Reviews Count</th>
                            <th>Jobs Posted</th>
                            <th>Past Hires</th>
                            <th>Payment Verification Status</th>
                            <th>Jobs</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($jobClientsObjects as $jobClients)
                        <tr>
                            <td>{{ $jobClients->country }}</td>
                            <td>{{ $jobClients->feedback }}</td>
                            <td>{{ $jobClients->reviews_count }}</td>
                            <td>{{ $jobClients->jobs_posted }}</td>
                            <td>{{ $jobClients->past_hires }}</td>
                            <td>{{ $jobClients->payment_verification_status }}</td>
                            <td>{{ optional($jobClients->job)->title }}</td>

                            <td>

                                <form method="POST" action="{!! route('job_clients.job_clients.destroy', $jobClients->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('job_clients.job_clients.show', $jobClients->id ) }}" class="btn btn-info" title="Show Job Clients">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('job_clients.job_clients.edit', $jobClients->id ) }}" class="btn btn-primary" title="Edit Job Clients">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Job Clients" onclick="return confirm(&quot;Delete Job Clients?&quot;)">
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
            {!! $jobClientsObjects->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection