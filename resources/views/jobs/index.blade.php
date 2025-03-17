<x-layout>
    <h1>Jobs</h1>
    <ul>
        @forelse($jobs as $job)
        <li>
            <a href="{{route('jobs.show', $job->id)}}">{{$job->title}}</a> - {{$job->description}}
        </li>
        @empty
        <li>No jobs</li>
        @endforelse
    </ul>
</x-layout>