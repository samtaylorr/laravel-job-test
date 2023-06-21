@extends('jobs.layout')

@section('content')
    <a href={{ URL::to('/') }} style="margin-top:10px">Back</a>
    <h1>{{$data->title}}</h1>
    <div class="description">{{$data->description}}</div>
