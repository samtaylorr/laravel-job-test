@extends('jobs.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Job Listings</h2>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif

    <a href={{ URL::to('create') }} style="margin-top:10px">Create New Job</a>

    <div class="table-responsive text-center">
        <table class="table table-borderless" id="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                </tr>
            </thead>
            @foreach($data as $job)
            <tr class="item{{$job->id}}">
                <td>{{$job->id}}</td>
                <td><a href="{{ URL::to('jobs', ['id' => $job->id]); }}">{{$job->title}}</a></td>
                <td>{{$job->description}}</td>
            </tr>
            @endforeach
        </table>
    </div>
