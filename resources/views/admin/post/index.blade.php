@extends('layouts.app')

@section('content')
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
                    <td></td>
                    <td></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
