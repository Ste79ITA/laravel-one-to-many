@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <h1>Project {{ $project->title }}</h1>
        <h2>Project Type</h2>
    </div>
</section>
<section>
    <div class="container">
        {!! $project->content !!}
    </div>
</section>
@endsection