<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class JobsController extends Controller
{

    /**
     * Display a listing of the jobs.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $jobs = Job::paginate(25);

        return view('jobs.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new job.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        
        
        return view('jobs.create');
    }

    /**
     * Store a new job in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            Job::create($data);

            return redirect()->route('jobs.job.index')
                             ->with('success_message', 'Job was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified job.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $job = Job::findOrFail($id);

        return view('jobs.show', compact('job'));
    }

    /**
     * Show the form for editing the specified job.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $job = Job::findOrFail($id);
        

        return view('jobs.edit', compact('job'));
    }

    /**
     * Update the specified job in the storage.
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
            
            $job = Job::findOrFail($id);
            $job->update($data);

            return redirect()->route('jobs.job.index')
                             ->with('success_message', 'Job was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified job from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $job = Job::findOrFail($id);
            $job->delete();

            return redirect()->route('jobs.job.index')
                             ->with('success_message', 'Job was successfully deleted!');

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
            'id' => 'nullable|string|min:0|max:19',
            'category2' => 'nullable|string|min:0|max:64',
            'subcategory2' => 'nullable|string|min:0|max:64',
            'job_type' => 'required|string|min:1|max:6',
            'budget' => 'nullable|numeric|min:0|max:1000000',
            'duration' => 'nullable|string|min:0|max:32',
            'workload' => 'nullable|string|min:0|max:32',
            'job_status' => 'nullable|string|min:0|max:10',
            'date_created' => 'required|string|min:1|max:24',
            'url' => 'required|string|min:1|max:64',
            'title' => 'nullable|string|min:0|max:128',
            'snippet' => 'nullable|string|min:0|max:1024',
     
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
