@extends('layout/mainlayout')

@section('page-content')
    <?php $page = $pageTitle;?>

    {{-- <canvas class="mry-dots" style="opacity: .3;"></canvas> --}}

    <div class="mry-head-bg">
        <img src="img/light/projects/prjct-7/1.jpg" alt="background">
        <div class="mry-bg-overlay"></div>
    </div>

    <div class="mry-banner mry-p-140-0">
        <div class="container">
            <div class="mry-main-title mry-title-center">
                <div class="mry-subtitle mry-mb-20 mry-fo">About Us</div>
                <h3 class="mry-mb-20 mry-fo">Let's combine your ideas and our
                        expertise.<span class="mry-animation-el"></span></h3>
                <div class="mry-text mry-fo"><b>Habar</b> architects</div>
                <div class="mry-scroll-hint-frame">
                    <a class="mry-scroll-hint mry-smooth-scroll mry-magnetic-link mry-fo" href="#mry-anchor">
                        <span class="mry-magnetic-object"></span>
                    </a>
                    <div class="mry-label mry-fo">Scroll Down</div>
                </div>
            </div>
        </div>
    </div>

    <!-- about -->
    <div class="mry-about mry-p-100-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">

                    <div class="mry-mb-100 mry-text-center">
                        <div class="mry-numbering mry-fo">
                            <div class="mry-border-text">01</div>
                            <div class="mry-subtitle">Who We Are</div>
                        </div>
                        <h4 class="mry-mb-40 mry-fo">Each member of our team will bring a set of unique and
                            exceptional skills to your project</h4>
                        <p class="mry-text mry-fo justify">Our architects have extensive experience with a wide array of
                            project types ranging from multi-million dollar facilities to smaller tenant finishes.
                            Whether it’s new construction, renovation or remodel, our professionals understand the
                            intricacies and specific characteristics that each type of structure demands.
                            As with all of our projects, Fusion Architects will approach yours with an innovative
                            eye, integration of technology, preservation of existing elements when desired,
                            and attention to sustainability.
                        </p>
                    </div>

                </div>

                <div class="col-lg-8">
                    <div class="mry-mb-100 mry-text-center">
                        <div class="mry-numbering mry-fo">
                            <div class="mry-border-text">02</div>
                            <div class="mry-subtitle">What we do?</div>
                        </div>
                        <h4 class="mry-mb-40 mry-fo">We believe that quality is in the details.</h4>
                        <p class="mry-text mry-fo justify">sharp, aesthetically pleasing plans that are also practical and
                            cost-effective to build. This attention to detail is reflected in
                            the drawings themselves, which are meticulously created with a high level of precision
                            and accuracy. Contractors appreciate our detailed drawings because
                            they allow jobs to flow smoothly – with fewer on-site challenges and changes. Clients,
                            too, appreciate our expertise — knowing that quality drawings result
                            in projects that are completed on time and on budget.</p>
                        <p class="mry-text mry-fo">Contact us today for your <a href="{{ route('habar.contact')}}"
                                class="mry-default-link">free consultation</a>.</p>

                    </div>
                </div>

                {{-- <div class="col-lg-10">

                    <div class="mry-about-video mry-mb-100 mry-fo">
                        <div class="mry-video-cover-frame">
                            <img class="mry-video-cover" src="img/light/content/video.jpg" alt="banner">
                            <div class="mry-cover-overlay"></div>
                            <div class="mry-play-button mry-magnetic-link">
                                <a class="mry-magnetic-object" data-fancybox href="https://vimeo.com/25428289"><i
                                        class="fas fa-play"></i></a>
                            </div>
                            <div class="mry-curtain"></div>
                        </div>
                    </div>

                </div> --}}

                <div class="col-lg-8">

                    <div class="mry-mb-100 mry-text-center">
                        <div class="mry-numbering mry-fo">
                            <div class="mry-border-text">03</div>
                            <div class="mry-subtitle">Services</div>
                        </div>
                        <h3 class="mry-mb-40 mry-fo">WE OFFER A PERSONALIZED SOLUTION FOR EACH PROJECT</h3>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">

                            <div class="mry-text-center mry-mb-100">
                                <h4 class="mry-mb-20 mry-fo">Architectural Design</h4>
                                <p class="mry-text mry-mb-20 mry-fo">Space | form | function</p>
                                <div class="mry-fo"><a href="{{ route('habar.contact')}}" class="mry-link mry-default-link">Order a
                                        service</a></div>
                            </div>

                        </div>
                        <div class="col-lg-6">

                            <div class="mry-text-center mry-mb-100">
                                <h4 class="mry-mb-20 mry-fo">Project Management</h4>
                                <p class="mry-text mry-fo">Creative Direction | Content Strategy</p>
                                <div class="mry-fo"><a href="{{ route('habar.contact')}}" class="mry-link mry-default-link">Order a
                                        service</a></div>
                            </div>

                        </div>
                        <div class="col-lg-12">

                            <div class="mry-text-center mry-mb-100">
                                <h4 class="mry-mb-20 mry-fo">Interior Design</h4>
                                <p class="mry-text mry-fo">Maximum potential | Visual Design | Interface Design</p>
                                <div class="mry-fo"><a href="{{ route('habar.contact')}}" class="mry-link mry-default-link">Order a
                                        service</a></div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-12">

                    <div class="mry-main-title mry-title-center mry-p-0-40">
                        <div class="mry-numbering mry-fo">
                            <div class="mry-border-text">04</div>
                            <div class="mry-subtitle">Members</div>
                        </div>
                        <h2 class="mry-fo">Meet The Team</h2>
                        <div class="mry-arrows mry-fo">
                            <div class="mry-sl-nav">
                                <div class="mry-prev mry-button-team-prev mry-magnetic-link"><span
                                        class="mry-magnetic-object"><i class="fas fa-arrow-left"></i></span></div>
                                <div class="mry-next mry-button-team-next mry-magnetic-link"><span
                                        class="mry-magnetic-object"><i class="fas fa-arrow-right"></i></span></div>
                            </div>
                            <div class="mry-label mry-fo">Slider Navigation</div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-10">

                    <div class="swiper-container mry-team-slider mry-mb-100">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">

                                <div class="mry-team-member mry-text-center">
                                    <div class="mry-member-photo-frame mry-fo">
                                        <img src="img/light/team/team-1.jpg" alt="Team member">
                                        <div class="mry-photo-overlay"></div>
                                        <div class="mry-curtain"></div>
                                    </div>
                                    <a href="{{ route('habar.contact')}}">
                                        <h4 class="mry-mb-10 mry-fo">Elias Walalign</h4>
                                    </a>
                                    <p class="mry-text mry-simple-text mry-fo">Founder</p>
                                </div>

                            </div>
                            <div class="swiper-slide">

                                <div class="mry-team-member mry-text-center">
                                    <div class="mry-member-photo-frame mry-fo">
                                        <img src="img/light/team/team-2.jpg" alt="Team member">
                                        <div class="mry-photo-overlay"></div>
                                        <div class="mry-curtain"></div>
                                    </div>
                                    <a href="{{ route('habar.contact')}}">
                                        <h4 class="mry-mb-10 mry-fo">Biniam Gedlu</h4>
                                    </a>
                                    <p class="mry-text mry-simple-text mry-fo">Principle Architect</p>
                                </div>

                            </div>
                            <div class="swiper-slide">

                                <div class="mry-team-member mry-text-center">
                                    <div class="mry-member-photo-frame mry-fo">
                                        <img src="img/light/team/team-3.jpg" alt="Team member">
                                        <div class="mry-photo-overlay"></div>
                                        <div class="mry-curtain"></div>
                                    </div>
                                    <a href="{{ route('habar.contact')}}">
                                        <h4 class="mry-mb-10 mry-fo">Mekonnen Dereje</h4>
                                    </a>
                                    <p class="mry-text mry-simple-text mry-fo">Senior Architect</p>
                                </div>

                            </div>
                            <div class="swiper-slide">

                                <div class="mry-team-member mry-text-center">
                                    <div class="mry-member-photo-frame mry-fo">
                                        <img src="img/light/team/team-4.jpg" alt="Team member">
                                        <div class="mry-photo-overlay"></div>
                                        <div class="mry-curtain"></div>
                                    </div>
                                    <a href="{{ route('habar.contact')}}">
                                        <h4 class="mry-mb-10 mry-fo">Girma Getu</h4>
                                    </a>
                                    <p class="mry-text mry-simple-text mry-fo">Engineer</p>
                                </div>

                            </div>
                            <div class="swiper-slide">

                                <div class="mry-team-member mry-text-center">
                                    <div class="mry-member-photo-frame mry-fo">
                                        <img src="img/light/team/team-5.jpg" alt="Team member">
                                        <div class="mry-photo-overlay"></div>
                                        <div class="mry-curtain"></div>
                                    </div>
                                    <a href="{{ route('habar.contact')}}">
                                        <h4 class="mry-mb-10 mry-fo">Meron Tsehay</h4>
                                    </a>
                                    <p class="mry-text mry-simple-text mry-fo">Architect</p>
                                </div>

                            </div>
                            <div class="swiper-slide">

                                <div class="mry-team-member mry-text-center">
                                    <div class="mry-member-photo-frame mry-fo">
                                        <img src="img/light/team/team-6.jpg" alt="Team member">
                                        <div class="mry-photo-overlay"></div>
                                        <div class="mry-curtain"></div>
                                    </div>
                                    <a href="{{ route('habar.contact')}}">
                                        <h4 class="mry-mb-10 mry-fo">Misikir Gebru</h4>
                                    </a>
                                    <p class="mry-text mry-simple-text mry-fo">Architect</p>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-8">

                    <div class="mry-mb-100 mry-text-center">
                        <div class="mry-numbering mry-fo">
                            <div class="mry-border-text">05</div>
                            <div class="mry-subtitle">We can become partners</div>
                        </div>
                        <h3 class="mry-mb-40 mry-fo">We’re here to help, let us take it from here.</h3>
                        <p class="mry-text mry-fo">As with all of our projects, Habar Architects will approach 
                            yours with an innovative eye, integration of technology, preservation of existing 
                            elements when desired, and attention to sustainability.</p>
                    </div>

                </div>
                {{-- <div class="col-lg-12">

                    <div class="mry-main-title mry-title-center mry-p-0-40">
                        <div class="mry-numbering mry-fo">
                            <div class="mry-border-text">06</div>
                            <div class="mry-subtitle">Testimonials</div>
                        </div>
                        <h2 class="mry-fo">Our customers say</h2>
                        <div class="mry-arrows">
                            <div class="mry-sl-nav mry-fo">
                                <div class="mry-prev mry-button-testimonials-prev mry-magnetic-link"><span
                                        class="mry-magnetic-object"><i class="fas fa-arrow-left"></i></span></div>
                                <div class="mry-next mry-button-testimonials-next mry-magnetic-link"><span
                                        class="mry-magnetic-object"><i class="fas fa-arrow-right"></i></span></div>
                            </div>
                            <div class="mry-label mry-fo">Slider Navigation</div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-8">

                    <div class="swiper-container mry-testimonials-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">

                                <div class="mry-title-center">
                                    <img src="img/light/clients/c-1.jpg" alt="client"
                                        class="mry-reviewer mry-mb-20 mry-fo">
                                    <h4 class="mry-mb-20 mry-fo">Customer 1</h4>
                                    <div class="mry-subtitle mry-mb-20 mry-fo">Company Name, CEO</div>
                                    <p class="mry-text mry-fo">We evaluated numerous marketing firms and selected
                                        Habar due to their experience in the solar industry, and the clear
                                        understanding of our business objectives that they demonstrated during the
                                        evaluation process. </p>
                                    <ul class="mry-star-rate mry-fo">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>

                            </div>
                            <div class="swiper-slide">

                                <div class="mry-title-center">
                                    <img src="img/light/clients/c-2.jpg" alt="client"
                                        class="mry-reviewer mry-mb-20 mry-fo">
                                    <h4 class="mry-mb-20 mry-fo">Customer 2</h4>
                                    <div class="mry-subtitle mry-mb-20 mry-fo">Company Name, CMO</div>
                                    <p class="mry-text mry-fo">We were very impressed with the progressive campaign
                                        and thought it spoke volumes to the reality of businesses. We have been
                                        working our way into the Toronto area for almost a year now and ready to
                                        gain some traction in that city.</p>
                                    <ul class="mry-star-rate mry-fo">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li class="mry-empty"><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>

                            </div>
                            <div class="swiper-slide">

                                <div class="mry-title-center">
                                    <img src="img/light/clients/c-3.jpg" alt="client"
                                        class="mry-reviewer mry-mb-20 mry-fo">
                                    <h4 class="mry-mb-20 mry-fo">Customer 3</h4>
                                    <div class="mry-subtitle mry-mb-20 mry-fo">Company Name, CFO</div>
                                    <p class="mry-text mry-fo">We were very impressed with the progressive campaign
                                        and thought it spoke volumes to the reality of businesses. We have been
                                        working our way into the Toronto area for almost a year now and ready to
                                        gain some traction in that city.</p>
                                    <ul class="mry-star-rate mry-fo">
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li><i class="fas fa-star"></i></li>
                                        <li class="mry-empty"><i class="fas fa-star"></i></li>
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>

                </div> --}}
            </div>
        </div>
    </div>
    <!-- about end -->

@endsection

@section('js')
    <!-- canvas js -->
    <script src="/js/plugins/canvas-colored.js"></script>
@endsection