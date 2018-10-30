<?php

namespace App\Http\Controllers;

use App\Models\DetailedJob;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class DetailedJobsController extends Controller
{

    /**
     * Display a listing of the detailed jobs.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $detailedJobs = DetailedJob::paginate(25);

        return view('detailed_jobs.index', compact('detailedJobs'));
    }

    /**
     * Show the form for creating a new detailed job.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('detailed_jobs.create');
    }

    /**
     * Store a new detailed job in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            DetailedJob::create($data);

            return redirect()->route('detailed_jobs.detailed_job.index')
                             ->with('success_message', 'Detailed Job was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified detailed job.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $detailedJob = DetailedJob::findOrFail($id);

        return view('detailed_jobs.show', compact('detailedJob'));
    }

    /**
     * Show the form for editing the specified detailed job.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $detailedJob = DetailedJob::findOrFail($id);
        

        return view('detailed_jobs.edit', compact('detailedJob'));
    }

    /**
     * Update the specified detailed job in the storage.
     *
     * @param  int $id
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            $detailedJob = DetailedJob::findOrFail($id);
            $detailedJob->update($data);

            return redirect()->route('detailed_jobs.detailed_job.index')
                             ->with('success_message', 'Detailed Job was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified detailed job from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $detailedJob = DetailedJob::findOrFail($id);
            $detailedJob->delete();

            return redirect()->route('detailed_jobs.detailed_job.index')
                             ->with('success_message', 'Detailed Job was successfully deleted!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    
    /**
     * Get the request's data from the request.
     *
     * @param Illuminate\Http\Request\Request $request 
     * @return array
     */
    protected function getData(Request $request)
    {
        $rules = [
            'id' => 'required|string',
            'op_title' => 'required|string',
            'op_description' => 'required|string',
            'job_category_level_one' => 'required|string',
            'job_category_level_two' => 'required|string',
            'job_type' => 'required|string',
            'amount' => 'nullable|numeric|min:0|max:1000000',
            'op_contractor_tier' => 'nullable|numeric',
            'op_pref_hourly_rate_max' => 'nullable|numeric|min:0|max:1000',
            'op_pref_fb_score' => 'nullable|numeric|min:0|max:100',
            'op_pref_odesk_hours' => 'nullable|numeric|min:0|max:10000',
            'op_pref_hourly_rate_min' => 'nullable|numeric|min:0|max:1000',
            'op_pref_english_skill' => 'nullable|numeric|min:0|max:3',
            'op_pref_has_portfolio' => 'nullable|boolean',
            'op_pref_location' => 'nullable|string|min:0|max:128',
            'op_ctime' => 'required|numeric|min:0|max:4294967295',
            'op_engagement' => 'nullable|string',
            'engagement_weeks' => 'nullable|string',
            'op_cny_upm_verified' => 'nullable|boolean',
            'ui_opening_status' => 'nullable|string',
            'op_tot_feedback' => 'nullable|numeric|min:0|max:1000',
            'op_is_cover_letter_required' => 'nullable|boolean',
            'op_attached_doc' => 'nullable|string',
            'op_high_hourly_rate_all' => 'nullable|numeric|min:0|max:1000',
            'op_low_hourly_rate_all' => 'nullable|numeric|min:0|max:1000',
            'op_tot_intv' => 'nullable|numeric|min:0|max:100',
            'op_tot_cand' => 'nullable|numeric|min:0|max:100',
     
        ];

        
        $data = $request->validate($rules);


        $data['op_pref_has_portfolio'] = $request->has('op_pref_has_portfolio');
        $data['op_cny_upm_verified'] = $request->has('op_cny_upm_verified');
        $data['op_is_cover_letter_required'] = $request->has('op_is_cover_letter_required');


        return $data;
    }

}
