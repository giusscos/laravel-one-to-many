@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex pb-3">
            <h3 class="text-capitalize">
                Aggiungi posts
            </h3>
            <a class="text-capitalize btn btn-danger ml-auto" href="{{ route('admin.post.index') }}">
                Annulla
            </a>
        </div>
    </div>
    <div class="container">
        <form action={{ route('admin.post.store') }} method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="content">Contenuto</label>
                <textarea class="form-control" id="content" name="content">
            </textarea>
            </div>
            <button type="submit" class="btn btn-primary">Aggiungi</button>
        </form>
    </div>
@endsection
