@extends('layouts.app')

@section('content')
<section>
    <div class="container">
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