@extends('layout')

@section('content')
    <h1>Jobs</h1>
    <ul>
        @forelse($jobs as $job)
            <li>
                {{$job}}
            </li>
        @empty
        <li>No jobs</li>
        @endforelse
    </ul>
@endsection
