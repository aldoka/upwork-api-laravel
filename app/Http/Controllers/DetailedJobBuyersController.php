<?php

namespace App\Http\Controllers;

use App\Models\DetailedJob;
use Illuminate\Http\Request;
use App\Models\DetailedJobBuyer;
use App\Http\Controllers\Controller;
use Exception;

class DetailedJobBuyersController extends Controller
{

    /**
     * Display a listing of the detailed job buyers.
     *
     * @return Illuminate\View\View
     */
    public function index()
    {
        $detailedJobBuyers = DetailedJobBuyer::paginate(25);

        return view('detailed_job_buyers.index', compact('detailedJobBuyers'));
    }

    /**
     * Show the form for creating a new detailed job buyer.
     *
     * @return Illuminate\View\View
     */
    public function create()
    {
        $detailedJobs = DetailedJob::pluck('op_title','id')->all();
        
        return view('detailed_job_buyers.create', compact('detailedJobs'));
    }

    /**
     * Store a new detailed job buyer in the storage.
     *
     * @param Illuminate\Http\Request $request
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        try {
            
            $data = $this->getData($request);
            
            DetailedJobBuyer::create($data);

            return redirect()->route('detailed_job_buyers.detailed_job_buyer.index')
                             ->with('success_message', 'Detailed Job Buyer was successfully added!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }
    }

    /**
     * Display the specified detailed job buyer.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function show($id)
    {
        $detailedJobBuyer = DetailedJobBuyer::with('detailedjob')->findOrFail($id);

        return view('detailed_job_buyers.show', compact('detailedJobBuyer'));
    }

    /**
     * Show the form for editing the specified detailed job buyer.
     *
     * @param int $id
     *
     * @return Illuminate\View\View
     */
    public function edit($id)
    {
        $detailedJobBuyer = DetailedJobBuyer::findOrFail($id);
        $detailedJobs = DetailedJob::pluck('op_title','id')->all();

        return view('detailed_job_buyers.edit', compact('detailedJobBuyer','detailedJobs'));
    }

    /**
     * Update the specified detailed job buyer in the storage.
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
            
            $detailedJobBuyer = DetailedJobBuyer::findOrFail($id);
            $detailedJobBuyer->update($data);

            return redirect()->route('detailed_job_buyers.detailed_job_buyer.index')
                             ->with('success_message', 'Detailed Job Buyer was successfully updated!');

        } catch (Exception $exception) {

            return back()->withInput()
                         ->withErrors(['unexpected_error' => 'Unexpected error occurred while trying to process your request!']);
        }        
    }

    /**
     * Remove the specified detailed job buyer from the storage.
     *
     * @param  int $id
     *
     * @return Illuminate\Http\RedirectResponse | Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        try {
            $detailedJobBuyer = DetailedJobBuyer::findOrFail($id);
            $detailedJobBuyer->delete();

            return redirect()->route('detailed_job_buyers.detailed_job_buyer.index')
                             ->with('success_message', 'Detailed Job Buyer was successfully deleted!');

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
            'op_contract_date' => 'nullable|string',
            'op_timezone' => 'nullable|string',
            'op_country' => 'required|string',
            'op_city' => 'nullable|string',
            'op_state' => 'nullable|string',
            'op_tot_asgs' => 'nullable|numeric|min:0|max:10000',
            'op_tot_charge' => 'nullable|numeric|min:0|max:1000000',
            'op_tot_hours' => 'nullable|numeric|min:0|max:100000',
            'op_tot_jobs_filled' => 'nullable|numeric|min:0|max:1000',
            'op_tot_jobs_open' => 'nullable|numeric|min:0|max:1000',
            'op_tot_jobs_posted' => 'nullable|numeric|min:0|max:1000',
            'op_tot_fp_asgs' => 'nullable|numeric|min:0|max:10000',
            'op_adjusted_score' => 'nullable|numeric|min:0|max:5',
            'detailed_jobs_id' => 'required|string',
     
        ];

        
        $data = $request->validate($rules);




        return $data;
    }

}
