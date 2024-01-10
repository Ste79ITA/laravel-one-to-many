@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <h1>Project Edit</h1>
    </div>
</section>
<section>
    <div class="container">

    
    <form action="{{ route('admin.projects.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="type_id" class="form-label">Type</label>
        <select name="type_id" id="type_id" class="form-select" aria-label="Type">

            <option value="" selected>Select Type</option>
            
            @foreach ($types as $type)
            <option @selected( old( 'type_id', optional($project->type)->id ) == $type->id) value="{{ $type->id }}">{{ $type->name }}</option>
            @endforeach
            
        </select>
    </div>

    <div class="mb-3">
        <div class="form-group">
           <p>Seleziona le technologie</p>
           <div class="d-flex flex-wrap gap-3">
               @foreach($technologies as $technology) 
               <input name="technologies[]" type="checkbox" class="form-check-input" value="{{ $technology->id }}" id="technology-{{ $technology->id }}" @checked( in_array($technology->id, old('technologies', $project->technologies->pluck('id')->all())))>
               <label for="technology-{{ $technology->id }}" class="form-check-label">{{ $technology->name }}</label>
               @endforeach
           </div>
        </div>
   </div>

      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="{{$project->title}}">
      </div>

      <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <textarea class="form-control"  id="content" rows="3" placeholder="Content" name="content" >{{ old('content',$project->content) }}</textarea>
      </div>
      
      <button type="submit" class="btn btn-primary">Save</button>
    
    </form>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>
</section>
@endsection