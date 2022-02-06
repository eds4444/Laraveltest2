@extends('layouts.main-layout')

@section('title', $post->title)
    
@section('content')

    @include('includes.categories')

    
    <div>
        <a href="{{ route('getPostsBycategory', $slug_category) }}" class="btn btn-outline-primary mb-4">Back</a>
    </div>

    <article>
        {!! $post->text !!}
    </article>


@endsection