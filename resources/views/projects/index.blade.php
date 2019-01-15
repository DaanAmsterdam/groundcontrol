@extends ('layouts.app');

@section('content')
    <div class="flex items-center mb-3">
        <h1 class="mr-auto">your projects</h1>
        <a href="/projects/create">New Project</a>
    </div>

    <ul>
        @forelse($projects as $project)
            <li><a href="{{ $project->path() }}">{{ $project->title }}</a></li>
        @empty
            <li>No Projects to show right now.</li>
        @endforelse
    </ul>
@endsection