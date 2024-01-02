 <!-- Swiper-->
 <section class="section swiper-container swiper-slider swiper-slider-corporate swiper-pagination-style-2"
     data-loop="true" data-autoplay="5000" data-simulate-touch="true" data-nav="false" data-direction="vertical">
     <div class="swiper-wrapper text-left">
         @foreach ($slider as $SilderItem)
             <div class="swiper-slide context-dark" data-slide-bg="{{ Storage::url($SilderItem->thumbnail) }}">
                 <div class="swiper-slide-caption section-md">
                     <div class="container">
                         <div class="row">
                             <div class="col-md-10">
                                 <h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0">
                                     {{ $SilderItem->description }}</h6>
                                 <h2 class="oh font-weight-light" data-caption-animate="slideInUp"
                                     data-caption-delay="100">
                                     <span class="font-weight-bold">{{ $SilderItem->name }}</span>
                                 </h2>
                                 <h6 class="text-uppercase" data-caption-animate="fadeInRight" data-caption-delay="0">
                                     Habibi Travel</h6>
                                 {{-- <a class="button button-default-outline button-ujarak" href="#"
                                     data-caption-animate="fadeInLeft" data-caption-delay="0">Get in touch</a> --}}
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         @endforeach
     </div>
     <!-- Swiper Pagination-->
     <div class="swiper-pagination"></div>
 </section>
