@extends('layouts.app')

@section('content')
<section>
    <div class="container">
        <h1>Project Create</h1>
    </div>
</section>
<section>
    <div class="container">

    
    <form action="{{ route('admin.projects.store', $project) }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="type_id" class="form-label">Type</label>
        <select name="type_id" id="type_id" class="form-select" aria-label="Type">

            <option selected>Select Type</option>
            
            @foreach ($types as $type)
            <option @selected( old('type_id') == $type->id) value="{{ $type->id }}">{{ $type->name }}</option>
            @endforeach
            
        </select>
    </div>

      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" placeholder="Title" name="title" value="{{old('title'), 'title'}}">
      </div>

      <div class="mb-3">
        <label for="content" class="form-label">Descrizione</label>
        <textarea class="form-control"  id="content" rows="3" placeholder="Content" name="content" value="{{old('content'), 'content'}}"></textarea>
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