@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex pb-3">
            <h3 class="text-capitalize">
                Elenco posts
            </h3>
            <a class="text-capitalize btn btn-primary ml-auto" href="{{ route('admin.posts.create') }}">
                Aggiungi post
            </a>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Titolo</th>
                    <th>Slug</th>
                    <th>Creato il</th>
                    <th>Aggiornato il</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            @foreach ($posts as $post)
                <tr>
                    <td> {{ $post->id }} </td>
                    <td> {{ $post->title }} </td>
                    <td> {{ $post->slug }} </td>
                    <td> {{ $post->created_at }} </td>
                    <td> {{ $post->updated_at }} </td>
                    <td><a href="{{ route('admin.posts.show', $post) }}" class="btn btn-primary">Scopri</a></td>
                    <td>
                        <form action="{{ route('admin.posts.destroy', $post) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                Elimina
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
