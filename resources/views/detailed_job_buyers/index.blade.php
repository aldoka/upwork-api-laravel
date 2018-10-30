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
                <h4 class="mt-5 mb-5">Detailed Job Buyers</h4>
            </div>

            <div class="btn-group btn-group-sm pull-right" role="group">
                <a href="{{ route('detailed_job_buyers.detailed_job_buyer.create') }}" class="btn btn-success" title="Create New Detailed Job Buyer">
                    <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                </a>
            </div>

        </div>
        
        @if(count($detailedJobBuyers) == 0)
            <div class="panel-body text-center">
                <h4>No Detailed Job Buyers Available!</h4>
            </div>
        @else
        <div class="panel-body panel-body-with-table">
            <div class="table-responsive">

                <table class="table table-striped ">
                    <thead>
                        <tr>
                            <th>Op Contract Date</th>
                            <th>Op Timezone</th>
                            <th>Op Country</th>
                            <th>Op City</th>
                            <th>Op State</th>
                            <th>Op Tot Asgs</th>
                            <th>Op Tot Charge</th>
                            <th>Op Tot Hours</th>
                            <th>Op Tot Jobs Filled</th>
                            <th>Op Tot Jobs Open</th>
                            <th>Op Tot Jobs Posted</th>
                            <th>Op Tot Fp Asgs</th>
                            <th>Op Adjusted Score</th>

                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($detailedJobBuyers as $detailedJobBuyer)
                        <tr>
                            <td>{{ $detailedJobBuyer->op_contract_date }}</td>
                            <td>{{ $detailedJobBuyer->op_timezone }}</td>
                            <td>{{ $detailedJobBuyer->op_country }}</td>
                            <td>{{ $detailedJobBuyer->op_city }}</td>
                            <td>{{ $detailedJobBuyer->op_state }}</td>
                            <td>{{ $detailedJobBuyer->op_tot_asgs }}</td>
                            <td>{{ $detailedJobBuyer->op_tot_charge }}</td>
                            <td>{{ $detailedJobBuyer->op_tot_hours }}</td>
                            <td>{{ $detailedJobBuyer->op_tot_jobs_filled }}</td>
                            <td>{{ $detailedJobBuyer->op_tot_jobs_open }}</td>
                            <td>{{ $detailedJobBuyer->op_tot_jobs_posted }}</td>
                            <td>{{ $detailedJobBuyer->op_tot_fp_asgs }}</td>
                            <td>{{ $detailedJobBuyer->op_adjusted_score }}</td>

                            <td>

                                <form method="POST" action="{!! route('detailed_job_buyers.detailed_job_buyer.destroy', $detailedJobBuyer->id) !!}" accept-charset="UTF-8">
                                <input name="_method" value="DELETE" type="hidden">
                                {{ csrf_field() }}

                                    <div class="btn-group btn-group-xs pull-right" role="group">
                                        <a href="{{ route('detailed_job_buyers.detailed_job_buyer.show', $detailedJobBuyer->id ) }}" class="btn btn-info" title="Show Detailed Job Buyer">
                                            <span class="glyphicon glyphicon-open" aria-hidden="true"></span>
                                        </a>
                                        <a href="{{ route('detailed_job_buyers.detailed_job_buyer.edit', $detailedJobBuyer->id ) }}" class="btn btn-primary" title="Edit Detailed Job Buyer">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </a>

                                        <button type="submit" class="btn btn-danger" title="Delete Detailed Job Buyer" onclick="return confirm(&quot;Delete Detailed Job Buyer?&quot;)">
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
            {!! $detailedJobBuyers->render() !!}
        </div>
        
        @endif
    
    </div>
@endsection