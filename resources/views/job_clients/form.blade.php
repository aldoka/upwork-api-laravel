
<div class="form-group {{ $errors->has('country') ? 'has-error' : '' }}">
    <label for="country" class="col-md-2 control-label">Country</label>
    <div class="col-md-10">
        <input class="form-control" name="country" type="text" id="country" value="{{ old('country', optional($jobClients)->country) }}" required="true" placeholder="Enter country here...">
        {!! $errors->first('country', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('feedback') ? 'has-error' : '' }}">
    <label for="feedback" class="col-md-2 control-label">Feedback</label>
    <div class="col-md-10">
        <input class="form-control" name="feedback" type="number" id="feedback" value="{{ old('feedback', optional($jobClients)->feedback) }}" min="-9" max="9" placeholder="Enter feedback here...">
        {!! $errors->first('feedback', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('reviews_count') ? 'has-error' : '' }}">
    <label for="reviews_count" class="col-md-2 control-label">Reviews Count</label>
    <div class="col-md-10">
        <input class="form-control" name="reviews_count" type="text" id="reviews_count" value="{{ old('reviews_count', optional($jobClients)->reviews_count) }}" min="-32768" max="32767" placeholder="Enter reviews count here...">
        {!! $errors->first('reviews_count', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('jobs_posted') ? 'has-error' : '' }}">
    <label for="jobs_posted" class="col-md-2 control-label">Jobs Posted</label>
    <div class="col-md-10">
        <input class="form-control" name="jobs_posted" type="text" id="jobs_posted" value="{{ old('jobs_posted', optional($jobClients)->jobs_posted) }}" min="-32768" max="32767" placeholder="Enter jobs posted here...">
        {!! $errors->first('jobs_posted', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('past_hires') ? 'has-error' : '' }}">
    <label for="past_hires" class="col-md-2 control-label">Past Hires</label>
    <div class="col-md-10">
        <input class="form-control" name="past_hires" type="text" id="past_hires" value="{{ old('past_hires', optional($jobClients)->past_hires) }}" min="-32768" max="32767" placeholder="Enter past hires here...">
        {!! $errors->first('past_hires', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('payment_verification_status') ? 'has-error' : '' }}">
    <label for="payment_verification_status" class="col-md-2 control-label">Payment Verification Status</label>
    <div class="col-md-10">
        <input class="form-control" name="payment_verification_status" type="text" id="payment_verification_status" value="{{ old('payment_verification_status', optional($jobClients)->payment_verification_status) }}" maxlength="8" placeholder="Enter payment verification status here...">
        {!! $errors->first('payment_verification_status', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('jobs_id') ? 'has-error' : '' }}">
    <label for="jobs_id" class="col-md-2 control-label">Jobs</label>
    <div class="col-md-10">
        <select class="form-control" id="jobs_id" name="jobs_id" required="true">
        	    <option value="" style="display: none;" {{ old('jobs_id', optional($jobClients)->jobs_id ?: '') == '' ? 'selected' : '' }} disabled selected>Select jobs</option>
        	@foreach ($jobs as $key => $job)
			    <option value="{{ $key }}" {{ old('jobs_id', optional($jobClients)->jobs_id) == $key ? 'selected' : '' }}>
			    	{{ $job }}
			    </option>
			@endforeach
        </select>
        
        {!! $errors->first('jobs_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

