<section class="section section-sm section-first bg-default text-md-left">
    <div class="container">
        <div class="row row-50 align-items-center justify-content-center justify-content-xl-between">
            <div class="col-lg-6 text-center wow fadeInUp">
                <img src="{{ $about_image ? Storage::url($about_image->thumbnail) : asset('frontend_theme/images/index-3-556x382.jpg') }}"
                    alt="" width="556" height="382" />
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay=".1s">
                <div class="box-width-lg-470">
                    <h3>About</h3>
                    <!-- Bootstrap tabs-->
                    <p>{{ $setting->about_web }}</p>
                </div>
            </div>
        </div>
    </div>
</section>
