@extends('layouts.app')

@section('title')

    Laravel-auth | Projects Index

@endsection

@section('content')
    <div class="container">
        <h1>Progetti</h1>

        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">title</th>
                        <th scope="col">description</th>
                    </tr>
                </thead>
                <tbody>
                    
                @forelse( $projects as $element )
                    <tr class="">
                        <td scope="row">{{$element->id}}</td>
                        <td>{{$element->title}}</td>
                        <td>{{$element->description}}</td>
                    </tr>
    
                    @empty
                    @endforelse
                    
                </tbody>
            </table>
        </div>
        



    </div>
@endsection

