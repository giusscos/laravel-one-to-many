@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-10">
                <h1>
                    {{ $post->title }}
                </h1>
                <div class="col-4 pb-3">
                    <span class="row">
                        Creato il: {{ $post->created_at}}
                    </span>
                    <span class="row">
                        Aggiornato il: {{ $post->updated_at}}
                    </span>
                </div>
            </div>
            <div class="col-2">
                <a href="{{ route('admin.post.index') }}" class="btn btn-primary">
                    Torna alla tabella
                </a>
            </div>
        </div>
        <div class="row">
            <p>
                {{ $post->content }}
            </p>
        </div>
    </div>
@endsection
