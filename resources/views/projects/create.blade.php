@extends ('layouts.app');

@section('content')
    <h1>Create a project</h1>

    <form method="POST" action="/projects">
        @csrf

        <div>
            <label for="title">Title</label>

            <div>
                <input type="text" name="title" placeholder="title">
            </div>
        </div>

        <div>
            <label for="description">Description</label>

            <div>
                <textarea name="description"></textarea>
            </div>
        </div>

        <div>
            <div>
                <button type="submit">Create Project</button>
                <a href="/projects">Cancel</a>
            </div>
        </div>
    </form>
@endsection