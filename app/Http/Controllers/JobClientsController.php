<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\JobClients;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;

class JobClientsController extends Controller
{

    /**
     * Display a listing of the job clients.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $jobClientsObjects = JobClients::with('job')->paginate(25);

        return view('job_clients.index', compact('jobClientsObjects'));
    }

    /**
     * Show the form for creating a new job clients.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $jobs = Job::pluck('title','id')->all();
        
        return view('job_clients.create', compact('jobs'));
    }

    /**
     * Store a new job clients in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            JobClients::create($data);

            return redirect()->route('job_clients.job_clients.index')
                             ->with('success_message', 'Job Clients was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified job clients.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $jobClients = JobClients::with('job')->findOrFail($id);

        return view('job_clients.show', compact('jobClients'));
    }

    /**
     * Show the form for editing the specified job clients.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $jobClients = JobClients::findOrFail($id);
        $jobs = Job::pluck('title','id')->all();

        return view('job_clients.edit', compact('jobClients','jobs'));
    }

    /**
     * Update the specified job clients in the storage.
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
            
            $jobClients = JobClients::findOrFail($id);
            $jobClients->update($data);

            return redirect()->route('job_clients.job_clients.index')
                             ->with('success_message', 'Job Clients was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified job clients from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $jobClients = JobClients::findOrFail($id);
            $jobClients->delete();

            return redirect()->route('job_clients.job_clients.index')
                             ->with('success_message', 'Job Clients was successfully deleted!');

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
            'country' => 'required|numeric|string',
            'feedback' => 'nullable|numeric|min:0|max:9',
            'reviews_count' => 'nullable|numeric|min:0|max:65535',
            'jobs_posted' => 'nullable',
            'past_hires' => 'nullable',
            'payment_verification_status' => 'nullable|string',
            'jobs_id' => 'required',
     
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
