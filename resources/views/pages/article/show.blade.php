@extends('layouts.app')

@section('content')
    <section class="section section-sm bg-default">
        <div class="container">
            <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">{{ $article->title }}</span></h3>
            <img src="{{ Storage::url($article->thumbnail) }}" class="img-fluid" alt="{{ $article->title }}" style="width: 80%">
            <div class="mt-4" style="text-align: left;">

                {!! $article->description !!}
            </div>
        </div>
    </section>
@endsection
