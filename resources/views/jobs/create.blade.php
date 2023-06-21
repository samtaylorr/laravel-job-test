@extends('jobs.layout')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <a href={{ URL::to('/') }} style="margin-top:10px">Back</a>
    <form method="post" action="/">
        @csrf
        <div class="form-group" style="width:50%">
        <label for="title">Title:</label>
        <input type="text" class="form-control" name="title">
        </div>
        <div class="form-group" style="width:50%">
        <label for="title">Description:</label>
        <textarea type="text" class="form-control" name="description"></textarea>
        </div>
        <button style="margin-top:10px" type="submit" class="btn btn-primary">Create New Job</button>
    </form>
