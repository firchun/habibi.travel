<footer class="section footer-corporate context-dark">
    <div class="footer-corporate-inset">
        <div class="container">
            <div class="row row-40 justify-content-lg-between">
                <div class="col-sm-6 col-md-12 col-lg-3 col-xl-4">
                    <div class="oh-desktop">
                        <div class="wow slideInRight" data-wow-delay="0s">
                            <h6 class="text-spacing-100 text-uppercase">Contact us</h6>
                            <ul class="footer-contacts d-inline-block d-sm-block">
                                <li>
                                    <div class="unit">
                                        <div class="unit-left"><span class="icon fa fa-phone"></span></div>
                                        <div class="unit-body"><a class="link-phone"
                                                href="tel:{{ $setting->phone }}">{{ $setting->phone }}</a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="unit">
                                        <div class="unit-left"><span class="icon fa fa-envelope"></span></div>
                                        <div class="unit-body"><a class="link-aemail"
                                                href="mailto:{{ $setting->email }}">{{ $setting->email }}</a></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="unit">
                                        <div class="unit-left"><span class="icon fa fa-location-arrow"></span></div>
                                        <div class="unit-body"><a class="link-location"
                                                href="#">{{ $setting->address }}</a></div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-5 col-lg-3 col-xl-4">
                    {{-- <div class="oh-desktop">
                        <div class="wow slideInDown" data-wow-delay="0s">
                            <h6 class="text-spacing-100 text-uppercase">Popular news</h6>
                            <!-- Post Minimal 2-->
                            <article class="post post-minimal-2">
                                <p class="post-minimal-2-title"><a href="#">Your Personal Guide to 5 Best Places
                                        to Visit on Earth</a></p>
                                <div class="post-minimal-2-time">
                                    <time datetime="2019-05-04">May 04, 2019</time>
                                </div>
                            </article>
                            <!-- Post Minimal 2-->
                            <article class="post post-minimal-2">
                                <p class="post-minimal-2-title"><a href="#">Top 10 Hotels: Rating by Wonder Tour
                                        Travel Experts</a></p>
                                <div class="post-minimal-2-time">
                                    <time datetime="2019-05-04">May 04, 2019</time>
                                </div>
                            </article>
                        </div>
                    </div> --}}
                </div>
                {{-- <div class="col-sm-11 col-md-7 col-lg-5 col-xl-4">
                    <div class="oh-desktop">
                        <div class="wow slideInLeft" data-wow-delay="0s">
                            <h6 class="text-spacing-100 text-uppercase">Quick links</h6>
                            <ul class="row-6 list-0 list-marked list-marked-md list-marked-secondary list-custom-2">
                                <li><a href="about.html">About us</a></li>
                                <li><a href="#">Our Team</a></li>
                                <li><a href="#">Gallery</a></li>
                            </ul>

                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
    <div class="footer-corporate-bottom-panel">
        <div class="container">
            <div class="row justfy-content-xl-space-berween row-10 align-items-md-center2">
                <div class="col-sm-6 col-md-4 text-sm-right text-md-center">
                    <div>
                        <ul class="list-inline list-inline-sm footer-social-list-2">
                            <li><a class="icon fa fa-facebook" href="#"></a></li>
                            {{-- <li><a class="icon fa fa-twitter" href="#"></a></li> --}}
                            {{-- <li><a class="icon fa fa-google-plus" href="#"></a></li> --}}
                            <li><a class="icon fa fa-instagram" href="#"></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4 order-sm-first">
                    <!-- Rights-->
                    <p class="rights"><span>&copy;&nbsp;</span><span
                            class="copyright-year"></span><span>&nbsp;</span><span>HABIBI Travel</span>. All Rights
                        Reserved</p>
                </div>
                <div class="col-sm-6 col-md-4 text-md-right">
                    <p class="rights"><a href="#">Privacy Policy</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>
