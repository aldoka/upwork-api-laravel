<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::group(
[
    'prefix' => 'job_clients',
], function () {

    Route::get('/', 'JobClientsController@index')
         ->name('job_clients.job_clients.index');

    Route::get('/create','JobClientsController@create')
         ->name('job_clients.job_clients.create');

    Route::get('/show/{jobClients}','JobClientsController@show')
         ->name('job_clients.job_clients.show')
         ->where('id', '[0-9]+');

    Route::get('/{jobClients}/edit','JobClientsController@edit')
         ->name('job_clients.job_clients.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'JobClientsController@store')
         ->name('job_clients.job_clients.store');
               
    Route::put('job_clients/{jobClients}', 'JobClientsController@update')
         ->name('job_clients.job_clients.update')
         ->where('id', '[0-9]+');

    Route::delete('/job_clients/{jobClients}','JobClientsController@destroy')
         ->name('job_clients.job_clients.destroy')
         ->where('id', '[0-9]+');

});

Route::group(
[
    'prefix' => 'jobs',
], function () {

    Route::get('/', 'JobsController@index')
         ->name('jobs.job.index');

    Route::get('/create','JobsController@create')
         ->name('jobs.job.create');

    Route::get('/show/{job}','JobsController@show')
         ->name('jobs.job.show')
         ->where('id', '[0-9]+');

    Route::get('/{job}/edit','JobsController@edit')
         ->name('jobs.job.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'JobsController@store')
         ->name('jobs.job.store');

    Route::put('job/{job}', 'JobsController@update')
         ->name('jobs.job.update')
         ->where('id', '[0-9]+');

    Route::delete('/job/{job}','JobsController@destroy')
         ->name('jobs.job.destroy')
         ->where('id', '[0-9]+');

});

    Route::group(
    [
        'prefix' => 'detailed_jobs',
    ], function () {

        Route::get('/', 'DetailedJobsController@index')
             ->name('detailed_jobs.detailed_job.index');

        Route::get('/create','DetailedJobsController@create')
             ->name('detailed_jobs.detailed_job.create');

        Route::get('/show/{detailedJob}','DetailedJobsController@show')
             ->name('detailed_jobs.detailed_job.show')
             ->where('id', '[0-9]+');

        Route::get('/{detailedJob}/edit','DetailedJobsController@edit')
             ->name('detailed_jobs.detailed_job.edit')
             ->where('id', '[0-9]+');

        Route::post('/', 'DetailedJobsController@store')
             ->name('detailed_jobs.detailed_job.store');

        Route::put('detailed_job/{detailedJob}', 'DetailedJobsController@update')
             ->name('detailed_jobs.detailed_job.update')
             ->where('id', '[0-9]+');

        Route::delete('/detailed_job/{detailedJob}','DetailedJobsController@destroy')
             ->name('detailed_jobs.detailed_job.destroy')
             ->where('id', '[0-9]+');

    });

Route::group(
[
    'prefix' => 'detailed_job_buyers',
], function () {

    Route::get('/', 'DetailedJobBuyersController@index')
         ->name('detailed_job_buyers.detailed_job_buyer.index');

    Route::get('/create','DetailedJobBuyersController@create')
         ->name('detailed_job_buyers.detailed_job_buyer.create');

    Route::get('/show/{detailedJobBuyer}','DetailedJobBuyersController@show')
         ->name('detailed_job_buyers.detailed_job_buyer.show')
         ->where('id', '[0-9]+');

    Route::get('/{detailedJobBuyer}/edit','DetailedJobBuyersController@edit')
         ->name('detailed_job_buyers.detailed_job_buyer.edit')
         ->where('id', '[0-9]+');

    Route::post('/', 'DetailedJobBuyersController@store')
         ->name('detailed_job_buyers.detailed_job_buyer.store');
               
    Route::put('detailed_job_buyer/{detailedJobBuyer}', 'DetailedJobBuyersController@update')
         ->name('detailed_job_buyers.detailed_job_buyer.update')
         ->where('id', '[0-9]+');

    Route::delete('/detailed_job_buyer/{detailedJobBuyer}','DetailedJobBuyersController@destroy')
         ->name('detailed_job_buyers.detailed_job_buyer.destroy')
         ->where('id', '[0-9]+');

});
