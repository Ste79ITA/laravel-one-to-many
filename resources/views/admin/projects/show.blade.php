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
        
        <ul class="d-flex gap-3 mb-3">
            @foreach ($project->technologies as $technology )
            <li class="badge rounded-pill text-bg-primary">{{ $technology->name }}</li>
            @endforeach
        </ul>
    </div>
</section>
<section>
    <div class="container">
        {!! $project->content !!}
    </div>
</section>
@endsection