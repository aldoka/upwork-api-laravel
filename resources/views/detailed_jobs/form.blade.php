
<div class="form-group {{ $errors->has('id') ? 'has-error' : '' }}">
    <label for="id" class="col-md-2 control-label">Id</label>
    <div class="col-md-10">
        <input class="form-control" name="id" type="text" id="id" value="{{ old('id', optional($detailedJob)->id) }}" maxlength="19" min="0" placeholder="Enter id here...">
        {!! $errors->first('id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('op_title') ? 'has-error' : '' }}">
    <label for="op_title" class="col-md-2 control-label">Op Title</label>
    <div class="col-md-10">
        <input class="form-control" name="op_title" type="text" id="op_title" value="{{ old('op_title', optional($detailedJob)->op_title) }}" minlength="1" maxlength="128" required="true" placeholder="Enter op title here...">
        {!! $errors->first('op_title', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('op_description') ? 'has-error' : '' }}">
    <label for="op_description" class="col-md-2 control-label">Op Description</label>
    <div class="col-md-10">
        <input class="form-control" name="op_description" type="text" id="op_description" value="{{ old('op_description', optional($detailedJob)->op_description) }}" minlength="1" maxlength="5000" required="true" placeholder="Enter op description here...">
        {!! $errors->first('op_description', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('job_category_level_one') ? 'has-error' : '' }}">
    <label for="job_category_level_one" class="col-md-2 control-label">Job Category Level One</label>
    <div class="col-md-10">
        <input class="form-control" name="job_category_level_one" type="text" id="job_category_level_one" value="{{ old('job_category_level_one', optional($detailedJob)->job_category_level_one) }}" minlength="1" maxlength="64" required="true" placeholder="Enter job category level one here...">
        {!! $errors->first('job_category_level_one', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('job_category_level_two') ? 'has-error' : '' }}">
    <label for="job_category_level_two" class="col-md-2 control-label">Job Category Level Two</label>
    <div class="col-md-10">
        <input class="form-control" name="job_category_level_two" type="text" id="job_category_level_two" value="{{ old('job_category_level_two', optional($detailedJob)->job_category_level_two) }}" minlength="1" maxlength="64" required="true" placeholder="Enter job category level two here...">
        {!! $errors->first('job_category_level_two', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('job_type') ? 'has-error' : '' }}">
    <label for="job_type" class="col-md-2 control-label">Job Type</label>
    <div class="col-md-10">
        <div class="radio">
            <label for="job_type_hourly">
            	<input id="job_type_hourly" class="" name="job_type" type="radio" value="Hourly" required="true" {{ old('job_type', optional($detailedJob)->job_type) == 'Hourly' ? 'checked' : '' }}>
                Hourly
            </label>
        </div>
        <div class="radio">
            <label for="job_type_fixed">
            	<input id="job_type_fixed" class="" name="job_type" type="radio" value="Fixed" required="true" {{ old('job_type', optional($detailedJob)->job_type) == 'Fixed' ? 'checked' : '' }}>
                Fixed
            </label>
        </div>

        {!! $errors->first('job_type', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('amount') ? 'has-error' : '' }}">
    <label for="amount" class="col-md-2 control-label">Amount</label>
    <div class="col-md-10">
        <input class="form-control" name="amount" type="number" id="amount" value="{{ old('amount', optional($detailedJob)->amount) }}" min="0" max="1000000" placeholder="Enter amount here...">
        {!! $errors->first('amount', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('op_contractor_tier') ? 'has-error' : '' }}">
    <label for="op_contractor_tier" class="col-md-2 control-label">Op Contractor Tier</label>
    <div class="col-md-10">
        <div class="radio">
            <label for="op_contractor_tier_0">
            	<input id="op_contractor_tier_0" class="" name="op_contractor_tier" type="radio" value="0" {{ old('op_contractor_tier', optional($detailedJob)->op_contractor_tier) == '0' ? 'checked' : '' }}>
                Beginner
            </label>
        </div>
        <div class="radio">
            <label for="op_contractor_tier_1">
            	<input id="op_contractor_tier_1" class="" name="op_contractor_tier" type="radio" value="1" {{ old('op_contractor_tier', optional($detailedJob)->op_contractor_tier) == '1' ? 'checked' : '' }}>
                Intermediate
            </label>
        </div>
        <div class="radio">
            <label for="op_contractor_tier_2">
            	<input id="op_contractor_tier_2" class="" name="op_contractor_tier" type="radio" value="2" {{ old('op_contractor_tier', optional($detailedJob)->op_contractor_tier) == '2' ? 'checked' : '' }}>
                Expert
            </label>
        </div>

        {!! $errors->first('op_contractor_tier', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('op_pref_hourly_rate_max') ? 'has-error' : '' }}">
    <label for="op_pref_hourly_rate_max" class="col-md-2 control-label">Op Pref Hourly Rate Max</label>
    <div class="col-md-10">
        <input class="form-control" name="op_pref_hourly_rate_max" type="number" id="op_pref_hourly_rate_max" value="{{ old('op_pref_hourly_rate_max', optional($detailedJob)->op_pref_hourly_rate_max) }}" min="0" max="1000" placeholder="Enter op pref hourly rate max here...">
        {!! $errors->first('op_pref_hourly_rate_max', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('op_pref_fb_score') ? 'has-error' : '' }}">
    <label for="op_pref_fb_score" class="col-md-2 control-label">Op Pref Fb Score</label>
    <div class="col-md-10">
        <div class="radio">
            <label for="op_pref_fb_score_0">
            	<input id="op_pref_fb_score_0" class="" name="op_pref_fb_score" type="radio" value="0" {{ old('op_pref_fb_score', optional($detailedJob)->op_pref_fb_score) == '0' ? 'checked' : '' }}>
                Any job success
            </label>
        </div>
        <div class="radio">
            <label for="op_pref_fb_score_80">
            	<input id="op_pref_fb_score_80" class="" name="op_pref_fb_score" type="radio" value="80" {{ old('op_pref_fb_score', optional($detailedJob)->op_pref_fb_score) == '80' ? 'checked' : '' }}>
                80% job success & up
            </label>
        </div>
        <div class="radio">
            <label for="op_pref_fb_score_90">
            	<input id="op_pref_fb_score_90" class="" name="op_pref_fb_score" type="radio" value="90" {{ old('op_pref_fb_score', optional($detailedJob)->op_pref_fb_score) == '90' ? 'checked' : '' }}>
                90% job success & up
            </label>
        </div>

        {!! $errors->first('op_pref_fb_score', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('op_pref_odesk_hours') ? 'has-error' : '' }}">
    <label for="op_pref_odesk_hours" class="col-md-2 control-label">Op Pref Odesk Hours</label>
    <div class="col-md-10">
        <div class="radio">
            <label for="op_pref_odesk_hours_0">
            	<input id="op_pref_odesk_hours_0" class="" name="op_pref_odesk_hours" type="radio" value="0" {{ old('op_pref_odesk_hours', optional($detailedJob)->op_pref_odesk_hours) == '0' ? 'checked' : '' }}>
                Any amount
            </label>
        </div>
        <div class="radio">
            <label for="op_pref_odesk_hours_1">
            	<input id="op_pref_odesk_hours_1" class="" name="op_pref_odesk_hours" type="radio" value="1" {{ old('op_pref_odesk_hours', optional($detailedJob)->op_pref_odesk_hours) == '1' ? 'checked' : '' }}>
                At least 1 hour
            </label>
        </div>
        <div class="radio">
            <label for="op_pref_odesk_hours_100">
            	<input id="op_pref_odesk_hours_100" class="" name="op_pref_odesk_hours" type="radio" value="100" {{ old('op_pref_odesk_hours', optional($detailedJob)->op_pref_odesk_hours) == '100' ? 'checked' : '' }}>
                At least 100 hours
            </label>
        </div>
        <div class="radio">
            <label for="op_pref_odesk_hours_500">
            	<input id="op_pref_odesk_hours_500" class="" name="op_pref_odesk_hours" type="radio" value="500" {{ old('op_pref_odesk_hours', optional($detailedJob)->op_pref_odesk_hours) == '500' ? 'checked' : '' }}>
                At least 500 hours
            </label>
        </div>
        <div class="radio">
            <label for="op_pref_odesk_hours_1000">
            	<input id="op_pref_odesk_hours_1000" class="" name="op_pref_odesk_hours" type="radio" value="1000" {{ old('op_pref_odesk_hours', optional($detailedJob)->op_pref_odesk_hours) == '1000' ? 'checked' : '' }}>
                At least 1000 hours
            </label>
        </div>

        {!! $errors->first('op_pref_odesk_hours', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('op_pref_hourly_rate_min') ? 'has-error' : '' }}">
    <label for="op_pref_hourly_rate_min" class="col-md-2 control-label">Op Pref Hourly Rate Min</label>
    <div class="col-md-10">
        <input class="form-control" name="op_pref_hourly_rate_min" type="text" id="op_pref_hourly_rate_min" value="{{ old('op_pref_hourly_rate_min', optional($detailedJob)->op_pref_hourly_rate_min) }}" min="0" max="1000" placeholder="Enter op pref hourly rate min here...">
        {!! $errors->first('op_pref_hourly_rate_min', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('op_pref_english_skill') ? 'has-error' : '' }}">
    <label for="op_pref_english_skill" class="col-md-2 control-label">Op Pref English Skill</label>
    <div class="col-md-10">
        <div class="radio">
            <label for="op_pref_english_skill_0">
            	<input id="op_pref_english_skill_0" class="" name="op_pref_english_skill" type="radio" value="0" {{ old('op_pref_english_skill', optional($detailedJob)->op_pref_english_skill) == '0' ? 'checked' : '' }}>
                Any level
            </label>
        </div>
        <div class="radio">
            <label for="op_pref_english_skill_1">
            	<input id="op_pref_english_skill_1" class="" name="op_pref_english_skill" type="radio" value="1" {{ old('op_pref_english_skill', optional($detailedJob)->op_pref_english_skill) == '1' ? 'checked' : '' }}>
                Basic
            </label>
        </div>
        <div class="radio">
            <label for="op_pref_english_skill_2">
            	<input id="op_pref_english_skill_2" class="" name="op_pref_english_skill" type="radio" value="2" {{ old('op_pref_english_skill', optional($detailedJob)->op_pref_english_skill) == '2' ? 'checked' : '' }}>
                Conversational
            </label>
        </div>
        <div class="radio">
            <label for="op_pref_english_skill_3">
            	<input id="op_pref_english_skill_3" class="" name="op_pref_english_skill" type="radio" value="3" {{ old('op_pref_english_skill', optional($detailedJob)->op_pref_english_skill) == '3' ? 'checked' : '' }}>
                Fluent
            </label>
        </div>
        <div class="radio">
            <label for="op_pref_english_skill_4">
            	<input id="op_pref_english_skill_4" class="" name="op_pref_english_skill" type="radio" value="4" {{ old('op_pref_english_skill', optional($detailedJob)->op_pref_english_skill) == '4' ? 'checked' : '' }}>
                Native or bilingual
            </label>
        </div>

        {!! $errors->first('op_pref_english_skill', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('op_pref_has_portfolio') ? 'has-error' : '' }}">
    <label for="op_pref_has_portfolio" class="col-md-2 control-label">Op Pref Has Portfolio</label>
    <div class="col-md-10">
        <div class="checkbox">
            <label for="op_pref_has_portfolio_1">
            	<input id="op_pref_has_portfolio_1" class="" name="op_pref_has_portfolio" type="checkbox" value="1" {{ old('op_pref_has_portfolio', optional($detailedJob)->op_pref_has_portfolio) == '1' ? 'checked' : '' }}>
                Yes
            </label>
        </div>

        {!! $errors->first('op_pref_has_portfolio', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('op_pref_location') ? 'has-error' : '' }}">
    <label for="op_pref_location" class="col-md-2 control-label">Op Pref Location</label>
    <div class="col-md-10">
        <input class="form-control" name="op_pref_location" type="text" id="op_pref_location" value="{{ old('op_pref_location', optional($detailedJob)->op_pref_location) }}" maxlength="128" placeholder="Enter op pref location here...">
        {!! $errors->first('op_pref_location', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('op_ctime') ? 'has-error' : '' }}">
    <label for="op_ctime" class="col-md-2 control-label">Op Ctime</label>
    <div class="col-md-10">
        <input class="form-control" name="op_ctime" type="number" id="op_ctime" value="{{ old('op_ctime', optional($detailedJob)->op_ctime) }}" min="0" max="4294967295" required="true" placeholder="Enter op ctime here...">
        {!! $errors->first('op_ctime', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('op_engagement') ? 'has-error' : '' }}">
    <label for="op_engagement" class="col-md-2 control-label">Op Engagement</label>
    <div class="col-md-10">
        <div class="radio">
            <label for="op_engagement_i_dont_know_yet">
            	<input id="op_engagement_i_dont_know_yet" class="" name="op_engagement" type="radio" value="I don't know yet" {{ old('op_engagement', optional($detailedJob)->op_engagement) == 'I don\'t know yet' ? 'checked' : '' }}>
                I don't know yet
            </label>
        </div>
        <div class="radio">
            <label for="op_engagement_parttime__1030_hrsweek">
            	<input id="op_engagement_parttime__1030_hrsweek" class="" name="op_engagement" type="radio" value="Part-time - 10-30 hrs/week" {{ old('op_engagement', optional($detailedJob)->op_engagement) == 'Part-time - 10-30 hrs/week' ? 'checked' : '' }}>
                Part-time - 10-30 hrs/week
            </label>
        </div>
        <div class="radio">
            <label for="op_engagement_fulltime__more_than_30_hrsweek">
            	<input id="op_engagement_fulltime__more_than_30_hrsweek" class="" name="op_engagement" type="radio" value="Full-time - more than 30 hrs/week" {{ old('op_engagement', optional($detailedJob)->op_engagement) == 'Full-time - more than 30 hrs/week' ? 'checked' : '' }}>
                Full-time - more than 30 hrs/week
            </label>
        </div>

        {!! $errors->first('op_engagement', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('engagement_weeks') ? 'has-error' : '' }}">
    <label for="engagement_weeks" class="col-md-2 control-label">Engagement Weeks</label>
    <div class="col-md-10">
        <div class="radio">
            <label for="engagement_weeks_less_than_1_months">
            	<input id="engagement_weeks_less_than_1_months" class="" name="engagement_weeks" type="radio" value="Less than 1 months" {{ old('engagement_weeks', optional($detailedJob)->engagement_weeks) == 'Less than 1 months' ? 'checked' : '' }}>
                Less than 1 months
            </label>
        </div>
        <div class="radio">
            <label for="engagement_weeks_1_to_3_months">
            	<input id="engagement_weeks_1_to_3_months" class="" name="engagement_weeks" type="radio" value="1 to 3 months" {{ old('engagement_weeks', optional($detailedJob)->engagement_weeks) == '1 to 3 months' ? 'checked' : '' }}>
                1 to 3 months
            </label>
        </div>
        <div class="radio">
            <label for="engagement_weeks_3_to_6_months">
            	<input id="engagement_weeks_3_to_6_months" class="" name="engagement_weeks" type="radio" value="3 to 6 months" {{ old('engagement_weeks', optional($detailedJob)->engagement_weeks) == '3 to 6 months' ? 'checked' : '' }}>
                3 to 6 months
            </label>
        </div>

        {!! $errors->first('engagement_weeks', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('op_cny_upm_verified') ? 'has-error' : '' }}">
    <label for="op_cny_upm_verified" class="col-md-2 control-label">Op Cny Upm Verified</label>
    <div class="col-md-10">
        <div class="checkbox">
            <label for="op_cny_upm_verified_1">
            	<input id="op_cny_upm_verified_1" class="" name="op_cny_upm_verified" type="checkbox" value="1" {{ old('op_cny_upm_verified', optional($detailedJob)->op_cny_upm_verified) == '1' ? 'checked' : '' }}>
                Yes
            </label>
        </div>

        {!! $errors->first('op_cny_upm_verified', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('ui_opening_status') ? 'has-error' : '' }}">
    <label for="ui_opening_status" class="col-md-2 control-label">Ui Opening Status</label>
    <div class="col-md-10">
        <input class="form-control" name="ui_opening_status" type="text" id="ui_opening_status" value="{{ old('ui_opening_status', optional($detailedJob)->ui_opening_status) }}" maxlength="6" placeholder="Enter ui opening status here...">
        {!! $errors->first('ui_opening_status', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('op_tot_feedback') ? 'has-error' : '' }}">
    <label for="op_tot_feedback" class="col-md-2 control-label">Op Tot Feedback</label>
    <div class="col-md-10">
        <input class="form-control" name="op_tot_feedback" type="text" id="op_tot_feedback" value="{{ old('op_tot_feedback', optional($detailedJob)->op_tot_feedback) }}" min="0" max="65535" placeholder="Enter op tot feedback here...">
        {!! $errors->first('op_tot_feedback', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('op_is_cover_letter_required') ? 'has-error' : '' }}">
    <label for="op_is_cover_letter_required" class="col-md-2 control-label">Op Is Cover Letter Required</label>
    <div class="col-md-10">
        <div class="checkbox">
            <label for="op_is_cover_letter_required_1">
            	<input id="op_is_cover_letter_required_1" class="" name="op_is_cover_letter_required" type="checkbox" value="1" {{ old('op_is_cover_letter_required', optional($detailedJob)->op_is_cover_letter_required) == '1' ? 'checked' : '' }}>
                Yes
            </label>
        </div>

        {!! $errors->first('op_is_cover_letter_required', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('op_attached_doc') ? 'has-error' : '' }}">
    <label for="op_attached_doc" class="col-md-2 control-label">Op Attached Doc</label>
    <div class="col-md-10">
        <input class="form-control" name="op_attached_doc" type="text" id="op_attached_doc" value="{{ old('op_attached_doc', optional($detailedJob)->op_attached_doc) }}" maxlength="256" placeholder="Enter op attached doc here...">
        {!! $errors->first('op_attached_doc', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('op_high_hourly_rate_all') ? 'has-error' : '' }}">
    <label for="op_high_hourly_rate_all" class="col-md-2 control-label">Op High Hourly Rate All</label>
    <div class="col-md-10">
        <input class="form-control" name="op_high_hourly_rate_all" type="number" id="op_high_hourly_rate_all" value="{{ old('op_high_hourly_rate_all', optional($detailedJob)->op_high_hourly_rate_all) }}" min="0" max="1000" placeholder="Enter op high hourly rate all here...">
        {!! $errors->first('op_high_hourly_rate_all', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('op_low_hourly_rate_all') ? 'has-error' : '' }}">
    <label for="op_low_hourly_rate_all" class="col-md-2 control-label">Op Low Hourly Rate All</label>
    <div class="col-md-10">
        <input class="form-control" name="op_low_hourly_rate_all" type="number" id="op_low_hourly_rate_all" value="{{ old('op_low_hourly_rate_all', optional($detailedJob)->op_low_hourly_rate_all) }}" min="0" max="1000" placeholder="Enter op low hourly rate all here...">
        {!! $errors->first('op_low_hourly_rate_all', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('op_tot_intv') ? 'has-error' : '' }}">
    <label for="op_tot_intv" class="col-md-2 control-label">Op Tot Intv</label>
    <div class="col-md-10">
        <input class="form-control" name="op_tot_intv" type="text" id="op_tot_intv" value="{{ old('op_tot_intv', optional($detailedJob)->op_tot_intv) }}" min="0" max="65535" placeholder="Enter op tot intv here...">
        {!! $errors->first('op_tot_intv', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group {{ $errors->has('op_tot_cand') ? 'has-error' : '' }}">
    <label for="op_tot_cand" class="col-md-2 control-label">Op Tot Cand</label>
    <div class="col-md-10">
        <input class="form-control" name="op_tot_cand" type="text" id="op_tot_cand" value="{{ old('op_tot_cand', optional($detailedJob)->op_tot_cand) }}" min="0" max="65535" placeholder="Enter op tot cand here...">
        {!! $errors->first('op_tot_cand', '<p class="help-block">:message</p>') !!}
    </div>
</div>

