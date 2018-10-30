
<div class="form-group {{ $errors->has('op_contract_date') ? 'has-error' : '' }}">
    <label for="op_contract_date" class="col-md-2 control-label">Op Contract Date</label>
    <div class="col-md-10">
        <input class="form-control" name="op_contract_date" type="text" id="op_contract_date" value="{{ old('op_contract_date', optional($detailedJobBuyer)->op_contract_date) }}" maxlength="20" placeholder="Enter op contract date here...">
        {!! $errors->first('op_contract_date', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('op_timezone') ? 'has-error' : '' }}">
    <label for="op_timezone" class="col-md-2 control-label">Op Timezone</label>
    <div class="col-md-10">
        <input class="form-control" name="op_timezone" type="text" id="op_timezone" value="{{ old('op_timezone', optional($detailedJobBuyer)->op_timezone) }}" maxlength="64" placeholder="Enter op timezone here...">
        {!! $errors->first('op_timezone', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('op_country') ? 'has-error' : '' }}">
    <label for="op_country" class="col-md-2 control-label">Op Country</label>
    <div class="col-md-10">
        <input class="form-control" name="op_country" type="text" id="op_country" value="{{ old('op_country', optional($detailedJobBuyer)->op_country) }}" maxlength="64" required="true" placeholder="Enter op country here...">
        {!! $errors->first('op_country', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('op_city') ? 'has-error' : '' }}">
    <label for="op_city" class="col-md-2 control-label">Op City</label>
    <div class="col-md-10">
        <input class="form-control" name="op_city" type="text" id="op_city" value="{{ old('op_city', optional($detailedJobBuyer)->op_city) }}" maxlength="64" placeholder="Enter op city here...">
        {!! $errors->first('op_city', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('op_state') ? 'has-error' : '' }}">
    <label for="op_state" class="col-md-2 control-label">Op State</label>
    <div class="col-md-10">
        <input class="form-control" name="op_state" type="text" id="op_state" value="{{ old('op_state', optional($detailedJobBuyer)->op_state) }}" maxlength="2" placeholder="Enter op state here...">
        {!! $errors->first('op_state', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('op_tot_asgs') ? 'has-error' : '' }}">
    <label for="op_tot_asgs" class="col-md-2 control-label">Op Tot Asgs</label>
    <div class="col-md-10">
        <input class="form-control" name="op_tot_asgs" type="text" id="op_tot_asgs" value="{{ old('op_tot_asgs', optional($detailedJobBuyer)->op_tot_asgs) }}" min="0" max="10000" placeholder="Enter op tot asgs here...">
        {!! $errors->first('op_tot_asgs', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('op_tot_charge') ? 'has-error' : '' }}">
    <label for="op_tot_charge" class="col-md-2 control-label">Op Tot Charge</label>
    <div class="col-md-10">
        <input class="form-control" name="op_tot_charge" type="number" id="op_tot_charge" value="{{ old('op_tot_charge', optional($detailedJobBuyer)->op_tot_charge) }}" min="0" max="1000000" placeholder="Enter op tot charge here...">
        {!! $errors->first('op_tot_charge', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('op_tot_hours') ? 'has-error' : '' }}">
    <label for="op_tot_hours" class="col-md-2 control-label">Op Tot Hours</label>
    <div class="col-md-10">
        <input class="form-control" name="op_tot_hours" type="number" id="op_tot_hours" value="{{ old('op_tot_hours', optional($detailedJobBuyer)->op_tot_hours) }}" min="0" max="100000" placeholder="Enter op tot hours here...">
        {!! $errors->first('op_tot_hours', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('op_tot_jobs_filled') ? 'has-error' : '' }}">
    <label for="op_tot_jobs_filled" class="col-md-2 control-label">Op Tot Jobs Filled</label>
    <div class="col-md-10">
        <input class="form-control" name="op_tot_jobs_filled" type="text" id="op_tot_jobs_filled" value="{{ old('op_tot_jobs_filled', optional($detailedJobBuyer)->op_tot_jobs_filled) }}" min="0" max="1000" placeholder="Enter op tot jobs filled here...">
        {!! $errors->first('op_tot_jobs_filled', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('op_tot_jobs_open') ? 'has-error' : '' }}">
    <label for="op_tot_jobs_open" class="col-md-2 control-label">Op Tot Jobs Open</label>
    <div class="col-md-10">
        <input class="form-control" name="op_tot_jobs_open" type="text" id="op_tot_jobs_open" value="{{ old('op_tot_jobs_open', optional($detailedJobBuyer)->op_tot_jobs_open) }}" min="0" max="1000" placeholder="Enter op tot jobs open here...">
        {!! $errors->first('op_tot_jobs_open', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('op_tot_jobs_posted') ? 'has-error' : '' }}">
    <label for="op_tot_jobs_posted" class="col-md-2 control-label">Op Tot Jobs Posted</label>
    <div class="col-md-10">
        <input class="form-control" name="op_tot_jobs_posted" type="text" id="op_tot_jobs_posted" value="{{ old('op_tot_jobs_posted', optional($detailedJobBuyer)->op_tot_jobs_posted) }}" min="0" max="1000" placeholder="Enter op tot jobs posted here...">
        {!! $errors->first('op_tot_jobs_posted', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('op_tot_fp_asgs') ? 'has-error' : '' }}">
    <label for="op_tot_fp_asgs" class="col-md-2 control-label">Op Tot Fp Asgs</label>
    <div class="col-md-10">
        <input class="form-control" name="op_tot_fp_asgs" type="text" id="op_tot_fp_asgs" value="{{ old('op_tot_fp_asgs', optional($detailedJobBuyer)->op_tot_fp_asgs) }}" min="0" max="10000" placeholder="Enter op tot fp asgs here...">
        {!! $errors->first('op_tot_fp_asgs', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('op_adjusted_score') ? 'has-error' : '' }}">
    <label for="op_adjusted_score" class="col-md-2 control-label">Op Adjusted Score</label>
    <div class="col-md-10">
        <input class="form-control" name="op_adjusted_score" type="number" id="op_adjusted_score" value="{{ old('op_adjusted_score', optional($detailedJobBuyer)->op_adjusted_score) }}" min="0" max="5" placeholder="Enter op adjusted score here...">
        {!! $errors->first('op_adjusted_score', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('detailed_jobs_id') ? 'has-error' : '' }}">
    <label for="detailed_jobs_id" class="col-md-2 control-label">Detailed Jobs</label>
    <div class="col-md-10">
        <select class="form-control" id="detailed_jobs_id" name="detailed_jobs_id" required="true">
        	    
        	@foreach ($detailedJobs as $key => $detailedJob)
			    <option value="{{ $key }}" {{ old('detailed_jobs_id', optional($detailedJobBuyer)->detailed_jobs_id) == $key ? 'selected' : '' }}>
			    	{{ $detailedJob }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('detailed_jobs_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

