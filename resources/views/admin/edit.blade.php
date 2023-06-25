@extends( 'layouts.app' )

@section('title')

    Laravel-auth | Projects Edit

@endsection

@section('content')

<div class="container">

    <h1>Modifica progetto: {{ $project->title }}</h1>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li> {{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route( 'admin.projects.update', $project ) }}" method="POST" >
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="projects-title" class="form-label">Title</label>
            <input type="text" id="projects-title" name="title" class="form-control" value="{{ old('title') ?? $project->title }}">
        </div>

        <div class="form-group">
            <label for="projects-description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="projects-description" cols="30" rows="10">{{ old('description') ?? $project->description }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary my-4">Modifica</button>

    </form>
</div>

@endsection