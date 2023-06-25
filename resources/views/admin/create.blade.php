@extends( 'layouts.app' )

@section('title')

    Laravel-auth | Projects Create

@endsection

@section('content')

<div class="container">

    <h1>Crea un nuovo progetto</h1>

    @if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li> {{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <form action="{{ route( 'admin.projects.store' ) }}" method="POST" >

        @csrf

        <div class="form-group">
            <label for="projects-title" class="form-label">Title</label>
            <input type="text" id="projects-title" name="title" class="form-control">
        </div>

        <div class="form-group">
            <label for="projects-description" class="form-label">Description</label>
            <textarea class="form-control" name="description" id="projects-description" cols="30" rows="10"></textarea>
        </div>

        <button type="submit" class="btn btn-primary my-4">Crea</button>

    </form>
</div>

@endsection