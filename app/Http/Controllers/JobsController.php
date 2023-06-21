<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jobs;

class JobsController extends Controller
{
    public function index(){
        $jobs = Jobs::all();
        return view('jobs.index')->withData($jobs);
    }

    public function store(Request $request){
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required'
        ]);

        $job = new Jobs;
        $job->title = $request->title;
        $job->description = $request->description;
        $job->save();

        $jobs = Jobs::all();
        return redirect()->route('jobs.index')->with('success', "Job added successfully!")->withData($jobs);
    }

    public function show($id){
        $job = Jobs::find($id);
        if(!empty($job)){
            return view('jobs.show')->withData($job);
        } else {
            return view('jobs.404');
        }
    }
}
