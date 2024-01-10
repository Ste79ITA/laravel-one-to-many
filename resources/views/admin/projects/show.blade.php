@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <div class="d-flex flew-wrap gap-4 my-3">
            <a href="{{ route('admin.projects.edit', $project) }}">Edit Project</a>
            <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                @csrf
                @method('DELETE')
                
                <input class="btn btn-danger btn-sm" type="submit" value="Delete Project">
                </form>  
        </div>
        <h1>{{ $project->title }}</h1>
        <h2>{{ optional($project->type)->name }}</h2>
    </div>
</section>
<section>
    <div class="container">
        {!! $project->content !!}
    </div>
</section>
@endsection