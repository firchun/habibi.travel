@extends('layouts.app')

@section('content')
    <section class="section section-sm bg-default">
        <div class="container">
            <h3 class="oh-desktop"><span class="d-inline-block wow slideInDown">Hot Article</span></h3>
            <div class="row row-sm row-40 row-md-50">
                @foreach ($article as $article_item)
                    <div class="col-sm-6 col-md-12 wow fadeInRight">
                        <!-- Product Big-->
                        <article class="product-big">
                            <div class="unit flex-column flex-md-row align-items-md-stretch">
                                <div class="unit-left"><a class="product-big-figure" href="#"><img
                                            src="{{ $article_item->thumbnail == null || $article_item->thumbnail == '' ? asset('frontend_theme/images/product-big-1-600x366.jpg') : Storage::url($article_item->thumbnail) }}"
                                            alt="" width="600" height="366" /></a></div>
                                <div class="unit-body">
                                    <div class="product-big-body">
                                        <h5 class="product-big-title"><a href="#">{{ $article_item->title }}</a></h5>

                                        <p class="product-big-text">{!! Str::limit($article_item->description, 100) !!}</p><a
                                            class="button button-black-outline button-ujarak"
                                            href="{{ route('hot_article.read', $article_item->slug) }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                @endforeach
                <div class="mt-4">
                    {{ $article->links() }}
                </div>
            </div>
        </div>
    </section>
@endsection
