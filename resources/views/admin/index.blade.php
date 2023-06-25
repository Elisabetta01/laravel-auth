@extends('layouts.app')

@section('title')

    Laravel-auth | Projects Index

@endsection

@section('content')
    <div class="container">
        <h1>Progetti</h1>

        <a class="btn btn-primary my-4" href="{{ route('admin.projects.create') }}">Crea Progetto</a>

        <div class="table-responsive">
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">title</th>
                        <th scope="col">show</th>
                        <th scope="col">delete</th>
                        <th scope="col">edit</th>
                    </tr>
                </thead>
                <tbody>
                    
                @forelse( $projects as $element )
                    <tr class="">
                        <td scope="row">{{$element->id}}</td>

                        <td>{{$element->title}}</td>

                        <td>
                            <a href="{{ route('admin.projects.show', $element ) }}">Visualizza</a>
                        </td>

                        <td>
                        <form action="{{ route('admin.projects.destroy', $element ) }}" method="POST">
                                @csrf 
                                @method('DELETE')

                                <button onclick="return confirm('Sei sicuro di eliminare il progetto?')" type="submit" class="btn btn-danger">X</button>
                            </form>
                        </td>

                        <td>
                            <a href="{{ route('admin.projects.edit', $element ) }}">Modifica</a>
                        </td>
                    </tr>
    
                    @empty
                    @endforelse
                    
                </tbody>
            </table>
        </div>
        



    </div>
@endsection

