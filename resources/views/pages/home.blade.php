@extends('layouts.app')

@section('content')
    @include('pages.components.slider')
    <!-- Section Box Categories-->
    @include('pages.components.discover')

    <!-- Discover New Horizons-->
    @include('pages.components.about')

    <!--	Our Services-->
    @include('pages.components.services')

    <!-- Hot tours-->
    {{-- start article  --}}
    @include('pages.components.article')
    {{-- end article  --}}
    <!-- Different People-->
    <section class="section section-sm">
        <div class="container">
            <h3 class="title-block find-car oh"><span class="d-inline-block wow slideInUp">Our Teams</span></h3>
            <div class="row row-30 justify-content-center box-ordered">
                @foreach ($teams as $TeamsItem)
                    <div class="col-sm-6 col-md-5 col-lg-3">
                        <!-- Team Modern-->
                        <article class="team-modern">
                            <div class="team-modern-header"><a class="team-modern-figure" href="#"><img
                                        class="img-circles" src="{{ Storage::url($TeamsItem->thumbnail) }}" alt=""
                                        width="118" height="118"
                                        style="height: 118px; width:118px; object-fit:cover;" /></a>
                                <svg x="0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70"
                                    enable-background="new 0 0 270 70" xml:space="preserve">
                                    <g>
                                        <path fill="#161616"
                                            d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z">
                                        </path>
                                    </g>
                                </svg>
                            </div>
                            <div class="team-modern-caption">
                                <h6 class="team-modern-name"><a href="#">{{ $TeamsItem->name }}</a></h6>
                                <p class="team-modern-status">{{ $TeamsItem->position }}</p>
                                <h6 class="team-modern-phone"><a
                                        href="tel:{{ $TeamsItem->phone }}">{{ $TeamsItem->phone }}</a></h6>
                                <h6 class="team-modern-phone"><a
                                        href="mailto:{{ $TeamsItem->email }}">{{ $TeamsItem->email }}</a></h6>
                            </div>
                        </article>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Section Subscribe-->
    <section class="section bg-default text-center offset-top-50">
        <h3 class="title-block find-car oh"><span class="d-inline-block wow slideInUp mb-4">Latest Promo</span></h3>
        <div class="parallax-container"
            data-parallax-img="{{ $promo->thumbnail == null || $promo->thumbnail == '' ? asset('frontend_theme/images/parallax-1-1920x850.jpg') : Storage::url($promo->thumbnail) }}">
            <div class="parallax-content section-xl section-inset-custom-1 context-dark bg-overlay-2-21">
                <div class="container">
                    <h2 class="heading-2 oh font-weight-normal wow slideInDown"><span
                            class="d-block font-weight-semi-bold">{{ $promo->title }}</span></h2>
                    <p class="text-width-medium text-spacing-75 wow fadeInLeft" data-wow-delay=".1s">
                        {!! Str::limit($promo->description, 200) !!}</p>
                    <a class="button button-white-outline button-ujarak"
                        href="{{ route('hot_article.read', $promo->slug) }}">Read More</a>
                </div>
            </div>
    </section>
    <!--	Instagrram wondertour-->
    <section class="section section-sm section-top-0 section-fluid section-relative bg-gray-4">
        <div class="container-fluid">
            <h6 class="gallery-title">Gallery</h6>
            <!-- Owl Carousel-->
            <div class="owl-carousel owl-classic owl-dots-secondary" data-items="1" data-sm-items="2" data-md-items="3"
                data-lg-items="4" data-xl-items="5" data-xxl-items="6" data-stage-padding="15" data-xxl-stage-padding="0"
                data-margin="30" data-autoplay="true" data-nav="true" data-dots="true">
                <!-- Thumbnail Classic-->
                @foreach ($galeri as $GaleriItem)
                    <article class="thumbnail thumbnail-mary">
                        <div class="thumbnail-mary-figure">
                            <img src="{{ Storage::url($GaleriItem->thumbnail) }}" alt="" width="270"
                                height="195" style="object-fit: cover; height:195px; width:250px;" />
                        </div>
                        <div class="thumbnail-mary-caption"><a class="icon fl-bigmug-line-zoom60"
                                href="{{ Storage::url($GaleriItem->thumbnail) }}" data-lightgallery="item"><img
                                    src="{{ Storage::url($GaleriItem->thumbnail) }}" alt="" width="270"
                                    height="195" style="object-fit: cover;" /></a>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>
@endsection
