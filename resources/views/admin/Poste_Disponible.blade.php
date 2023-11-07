@extends('layouts.app')

@section('content')
    <h1>Job Listings</h1>
    <ul>
        @foreach($jobs as $job)
            <li>
                <h2>{{ $job->title }}</h2>
                <p>{{ $job->description }}</p>
                <p>Location: {{ $job->location }}</p>
                <p>Posted on: {{ $job->created_at->format('d-M-Y') }}</p>
            </li>
        @endforeach
    </ul>
@endsection
