
<div class="form-group {{ $errors->has('id') ? 'has-error' : '' }}">
    <label for="id" class="col-md-2 control-label">Id</label>
    <div class="col-md-10">
        <input class="form-control" name="id" type="text" id="id" value="{{ old('id', optional($job)->id) }}" maxlength="19" min="0" placeholder="Enter id here...">
        {!! $errors->first('id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('category2') ? 'has-error' : '' }}">
    <label for="category2" class="col-md-2 control-label">Category2</label>
    <div class="col-md-10">
        <input class="form-control" name="category2" type="text" id="category2" value="{{ old('category2', optional($job)->category2) }}" maxlength="64" placeholder="Enter category2 here...">
        {!! $errors->first('category2', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('subcategory2') ? 'has-error' : '' }}">
    <label for="subcategory2" class="col-md-2 control-label">Subcategory2</label>
    <div class="col-md-10">
        <input class="form-control" name="subcategory2" type="text" id="subcategory2" value="{{ old('subcategory2', optional($job)->subcategory2) }}" maxlength="64" placeholder="Enter subcategory2 here...">
        {!! $errors->first('subcategory2', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('job_type') ? 'has-error' : '' }}">
    <label for="job_type" class="col-md-2 control-label">Job Type</label>
    <div class="col-md-10">
        <div class="radio">
            <label for="job_type_hourly">
            	<input id="job_type_hourly" class="" name="job_type" type="radio" value="Hourly" required="true" {{ old('job_type', optional($job)->job_type) == 'Hourly' ? 'checked' : '' }}>
                Hourly
            </label>
        </div>
        <div class="radio">
            <label for="job_type_fixed">
            	<input id="job_type_fixed" class="" name="job_type" type="radio" value="Fixed" required="true" {{ old('job_type', optional($job)->job_type) == 'Fixed' ? 'checked' : '' }}>
                Fixed
            </label>
        </div>

        {!! $errors->first('job_type', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('budget') ? 'has-error' : '' }}">
    <label for="budget" class="col-md-2 control-label">Budget</label>
    <div class="col-md-10">
        <input class="form-control" name="budget" type="number" id="budget" value="{{ old('budget', optional($job)->budget) }}" min="0" max="1000000" placeholder="Enter budget here...">
        {!! $errors->first('budget', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('duration') ? 'has-error' : '' }}">
    <label for="duration" class="col-md-2 control-label">Duration</label>
    <div class="col-md-10">
        <div class="radio">
            <label for="duration_less_than_1_month">
            	<input id="duration_less_than_1_month" class="" name="duration" type="radio" value="Less than 1 month" {{ old('duration', optional($job)->duration) == 'Less than 1 month' ? 'checked' : '' }}>
                Less than 1 month
            </label>
        </div>
        <div class="radio">
            <label for="duration_1_to_3_months">
            	<input id="duration_1_to_3_months" class="" name="duration" type="radio" value="1 to 3 months" {{ old('duration', optional($job)->duration) == '1 to 3 months' ? 'checked' : '' }}>
                1 to 3 months
            </label>
        </div>
        <div class="radio">
            <label for="duration_more_than_3_months">
            	<input id="duration_more_than_3_months" class="" name="duration" type="radio" value="More than 3 months" {{ old('duration', optional($job)->duration) == 'More than 3 months' ? 'checked' : '' }}>
                More than 3 months
            </label>
        </div>

        {!! $errors->first('duration', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('workload') ? 'has-error' : '' }}">
    <label for="workload" class="col-md-2 control-label">Workload</label>
    <div class="col-md-10">
        <div class="radio">
            <label for="workload_more_than_30_hrsweek">
            	<input id="workload_more_than_30_hrsweek" class="" name="workload" type="radio" value="More than 30 hrs/week" {{ old('workload', optional($job)->workload) == 'More than 30 hrs/week' ? 'checked' : '' }}>
                More than 30 hrs/week
            </label>
        </div>
        <div class="radio">
            <label for="workload_less_than_30_hrsweek">
            	<input id="workload_less_than_30_hrsweek" class="" name="workload" type="radio" value="Less than 30 hrs/week" {{ old('workload', optional($job)->workload) == 'Less than 30 hrs/week' ? 'checked' : '' }}>
                Less than 30 hrs/week
            </label>
        </div>
        <div class="radio">
            <label for="workload_i_dont_know_yet">
            	<input id="workload_i_dont_know_yet" class="" name="workload" type="radio" value="I don't know yet" {{ old('workload', optional($job)->workload) == 'I don\'t know yet' ? 'checked' : '' }}>
                I don't know yet
            </label>
        </div>

        {!! $errors->first('workload', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('job_status') ? 'has-error' : '' }}">
    <label for="job_status" class="col-md-2 control-label">Job Status</label>
    <div class="col-md-10">
        <div class="radio">
            <label for="job_status_open">
            	<input id="job_status_open" class="" name="job_status" type="radio" value="Open" {{ old('job_status', optional($job)->job_status) == 'Open' ? 'checked' : '' }}>
                Open
            </label>
        </div>
        <div class="radio">
            <label for="job_status_completed">
            	<input id="job_status_completed" class="" name="job_status" type="radio" value="Completed" {{ old('job_status', optional($job)->job_status) == 'Completed' ? 'checked' : '' }}>
                Completed
            </label>
        </div>
        <div class="radio">
            <label for="job_status_cancelled">
            	<input id="job_status_cancelled" class="" name="job_status" type="radio" value="Cancelled" {{ old('job_status', optional($job)->job_status) == 'Cancelled' ? 'checked' : '' }}>
                Cancelled
            </label>
        </div>

        {!! $errors->first('job_status', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('date_created') ? 'has-error' : '' }}">
    <label for="date_created" class="col-md-2 control-label">Date Created</label>
    <div class="col-md-10">
        <input class="form-control" name="date_created" type="text" id="date_created" value="{{ old('date_created', optional($job)->date_created) }}" minlength="1" maxlength="24" required="true" placeholder="Enter date created here...">
        {!! $errors->first('date_created', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('url') ? 'has-error' : '' }}">
    <label for="url" class="col-md-2 control-label">Url</label>
    <div class="col-md-10">
        <input class="form-control" name="url" type="text" id="url" value="{{ old('url', optional($job)->url) }}" minlength="1" maxlength="64" required="true" placeholder="Enter url here...">
        {!! $errors->first('url', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
    <label for="title" class="col-md-2 control-label">Title</label>
    <div class="col-md-10">
        <input class="form-control" name="title" type="text" id="title" value="{{ old('title', optional($job)->title) }}" maxlength="128" placeholder="Enter title here...">
        {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('snippet') ? 'has-error' : '' }}">
    <label for="snippet" class="col-md-2 control-label">Snippet</label>
    <div class="col-md-10">
        <input class="form-control" name="snippet" type="text" id="snippet" value="{{ old('snippet', optional($job)->snippet) }}" maxlength="1024" placeholder="Enter snippet here...">
        {!! $errors->first('snippet', '<p class="help-block">:message</p>') !!}
    </div>
</div>

