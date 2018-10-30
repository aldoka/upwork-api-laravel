@extends('layouts.app')

@section('content')

<div class="panel panel-default">
    <div class="panel-heading clearfix">

        <span class="pull-left">
            <h4 class="mt-5 mb-5">{{ isset($title) ? $title : 'Detailed Job Buyer' }}</h4>
        </span>

        <div class="pull-right">

            <form method="POST" action="{!! route('detailed_job_buyers.detailed_job_buyer.destroy', $detailedJobBuyer->id) !!}" accept-charset="UTF-8">
            <input name="_method" value="DELETE" type="hidden">
            {{ csrf_field() }}
                <div class="btn-group btn-group-sm" role="group">
                    <a href="{{ route('detailed_job_buyers.detailed_job_buyer.index') }}" class="btn btn-primary" title="Show All Detailed Job Buyer">
                        <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
                    </a>

                    <a href="{{ route('detailed_job_buyers.detailed_job_buyer.create') }}" class="btn btn-success" title="Create New Detailed Job Buyer">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                    </a>
                    
                    <a href="{{ route('detailed_job_buyers.detailed_job_buyer.edit', $detailedJobBuyer->id ) }}" class="btn btn-primary" title="Edit Detailed Job Buyer">
                        <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                    </a>

                    <button type="submit" class="btn btn-danger" title="Delete Detailed Job Buyer" onclick="return confirm(&quot;Delete Detailed Job Buyer??&quot;)">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span>
                    </button>
                </div>
            </form>

        </div>

    </div>

    <div class="panel-body">
        <dl class="dl-horizontal">
            <dt>Op Contract Date</dt>
            <dd>{{ $detailedJobBuyer->op_contract_date }}</dd>
            <dt>Op Timezone</dt>
            <dd>{{ $detailedJobBuyer->op_timezone }}</dd>
            <dt>Op Country</dt>
            <dd>{{ $detailedJobBuyer->op_country }}</dd>
            <dt>Op City</dt>
            <dd>{{ $detailedJobBuyer->op_city }}</dd>
            <dt>Op State</dt>
            <dd>{{ $detailedJobBuyer->op_state }}</dd>
            <dt>Op Tot Asgs</dt>
            <dd>{{ $detailedJobBuyer->op_tot_asgs }}</dd>
            <dt>Op Tot Charge</dt>
            <dd>{{ $detailedJobBuyer->op_tot_charge }}</dd>
            <dt>Op Tot Hours</dt>
            <dd>{{ $detailedJobBuyer->op_tot_hours }}</dd>
            <dt>Op Tot Jobs Filled</dt>
            <dd>{{ $detailedJobBuyer->op_tot_jobs_filled }}</dd>
            <dt>Op Tot Jobs Open</dt>
            <dd>{{ $detailedJobBuyer->op_tot_jobs_open }}</dd>
            <dt>Op Tot Jobs Posted</dt>
            <dd>{{ $detailedJobBuyer->op_tot_jobs_posted }}</dd>
            <dt>Op Tot Fp Asgs</dt>
            <dd>{{ $detailedJobBuyer->op_tot_fp_asgs }}</dd>
            <dt>Op Adjusted Score</dt>
            <dd>{{ $detailedJobBuyer->op_adjusted_score }}</dd>
            <dt>Detailed Jobs</dt>
            <dd>{{ optional($detailedJobBuyer->detailedJob)->op_title }}</dd>

        </dl>

    </div>
</div>

@endsection