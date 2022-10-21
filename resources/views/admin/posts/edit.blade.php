@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex pb-3">
            <h3 class="text-capitalize">
                Modifica post
            </h3>
            <a class="text-capitalize btn btn-danger ml-auto" href="{{ route('admin.posts.show', $post) }}">
                Annulla
            </a>
        </div>
    </div>
    <div class="container">
        <form action={{ route('admin.posts.update', $post) }} method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    value="{{ old('title', $post->title) }}">
                @error('title')
                    <div class="mt-2">
                        <span class="danger">
                            {{ $message }}
                        </span>
                    </div>
                @enderror
            </div>
            <div class="form-group">
                <label for="content">Contenuto</label>
                <textarea rows="10" class="form-control @error('content') is-invalid @enderror" id="content" name="content">{{ old('content', $post->content) }}</textarea>
                @error('title')
                    <div class="mt-2">
                        <span class="danger">
                            {{ $message }}
                        </span>
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Modifica</button>
        </form>
    </div>
@endsection
