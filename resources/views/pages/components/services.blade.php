<section class="section section-sm">
    <div class="container">
        <h3>Our Services</h3>
        <div class="row row-30 justify-content-center">
            @foreach ($services as $service_item)
                <div class="col-sm-6 col-lg-4">
                    <article class="box-icon-classic">
                        <div
                            class="unit box-icon-classic-body flex-column flex-md-row text-md-left flex-lg-column text-lg-center flex-xl-row text-xl-left">
                            <div class="unit-left">
                                <img src="{{ asset('img/icon/') . '/' . $service_item->icon . '.svg' }}"
                                    alt="{{ $service_item->icon }}" style="width: 50px;">
                            </div>
                            <div class="unit-body">
                                <h5 class="box-icon-classic-title"><a href="#">{{ $service_item->name }}</a></h5>
                                <p class="box-icon-classic-text">{{ $service_item->description }}</p>
                            </div>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
</section>
