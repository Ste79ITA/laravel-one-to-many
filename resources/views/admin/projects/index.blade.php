@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <h1>Projects Index</h1>
    </div>
</section>
<section>
    <div class="container">
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Slug</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @forelse ($projects as $project)
                    
                <tr>
                    <td>{{ $project->id }}</td>
                    <td>
                        <a href="{{ route('admin.projects.show', $project) }}">{{ $project->title }}</a>
                    </td>
                    <td>{{ $project->slug }}</td>
                    <td>
                        <a href="{{ route('admin.projects.edit', $project) }}">edit</a>
                    </td>
                    <td>
                        <form action="{{ route('admin.projects.destroy', $project) }}">
                        @csrf
                        @method('DELETE')
                        
                        <input class="btn btn-danger btn-sm" type="submit" value="delete">
                        </form>                    
                    </td>
                    </tr>
                    @empty
                @endforelse
            </tbody>
        </table>
    </div>
</section>
@endsection