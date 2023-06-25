@extends('layouts.app')

@section('title')

    Laravel-auth | Projects Show

@endsection

@section('content')
    <div class="container">
        <h2>Singolo Progetto: {{ $project->id }}</h2>

        <div class="mt-4">
             <h3>{{ $project->title }}</h3>
             <p>{{ $project->description }}</p>
        </div>

     </div>
@endsection

