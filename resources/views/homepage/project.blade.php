@extends('layout/mainlayout')

@section('page-content')
    <?php $page = $pageTitle;?>

    <canvas class="mry-dots" style="opacity: .4;"></canvas>

    <div class="mry-head-bg">
        <img src="{{ asset('/img/light/projects/prjct-' . $project->id . '/1.jpg') }}" alt="background">
        <div class="mry-bg-overlay"></div>
    </div>

    <div class="mry-banner mry-p-140-0">
        <div class="container">
            <div class="mry-main-title mry-title-center">
                <div class="mry-subtitle mry-mb-20 mry-fo">Project</div>
                <h3 class="mry-mb-20 mry-fo">{{ $project->title }}<br><span class="mry-border-text" style="-webkit-text-stroke-width: 0px;">{{ $project->code_name }}</span>
                    <span class="mry-animation-el"></span></h3>
                <div class="mry-text mry-fo">
                    @foreach (json_decode($project->types) ?? '' as $project_types)
                        {{ $project_types }}@if(!$loop->last)&nbsp;+@endif
                    @endforeach
                </div>
                <div class="mry-scroll-hint-frame">
                    <a class="mry-scroll-hint mry-smooth-scroll mry-magnetic-link mry-fo" href="#mry-anchor">
                        <span class="mry-magnetic-object"></span>
                    </a>
                    <div class="mry-label mry-fo">Scroll Down</div>
                </div>
            </div>
        </div>
    </div>

    <!-- project -->
    <div class="mry-about mry-p-100-100">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-8">

                    <div class="mry-mb-100 mry-text-center">
                        <div class="mry-numbering mry-fo">
                            <div class="mry-border-text">01</div>
                            <div class="mry-subtitle">Project</div>
                        </div>
                        <h3 class="mry-mb-40 mry-fo">General Information</h3>
                        <div class="mry-info-box-frame">
                            <div class="mry-info-box">
                                <div class="row">
                                    <div class="mry-mb-20 col-md-6">
                                        <div class="mry-label mry-mb-5">COLLABORATIONS:</div>
                                        <div class="mry-text">{{ $project->collaborators ?? '' }}</div>
                                    </div>
                                    <div class="mry-mb-20 col-md-6">
                                        <div class="mry-label mry-mb-5">LOCATION:</div>
                                        <div class="mry-text">{{ $project->location ?? '' }}</div>
                                    </div>
                                    <div class="mry-mb-20 col-md-6">
                                        <div class="mry-label mry-mb-5">PROJECT YEAR:</div>
                                        <div class="mry-text">{{ $project->year ?? '' }}</div>
                                    </div>
                                    <div class="mry-mb-20 col-md-6">
                                        <div class="mry-label mry-mb-5">SITE AREA:</div>
                                        <div class="mry-text">@if ($project->site_area != 0) {{ number_format($project->site_area ?? '', 2, '.', ',') }} sq.m @else &mdash; @endif</div>
                                    </div>
                                    <div class="mry-mb-20 col-md-6">
                                        <div class="mry-label mry-mb-5">TOTAL FLOOR AREA:</div>
                                        <div class="mry-text">@if ($project->floor_area != 0) {{ number_format($project->floor_area ?? '', 2, '.', ',') }} sq.m @else &mdash; @endif</div>
                                    </div>
                                    <div class="mry-mb-20 col-md-6">
                                        <div class="mry-label mry-mb-5">NO OF STORIES:</div>
                                        <div class="mry-text">{{ $project->story_num ?? '' }}</div>
                                    </div>
                                    <div class="mry-mb-20 col-md-6">
                                        <div class="mry-label mry-mb-5">CLIENT:</div>
                                        <div class="mry-text">{{ $project->client ?? '' }}</div>
                                    </div>
                                    <div class="mry-mb-20 col-md-6">
                                        <div class="mry-label mry-mb-5">PROJECT COST:</div>
                                        <div class="mry-text">{{ $project->currency }} {{ number_format($project->budget ?? '', 2, '.', ',') }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-12">

                    <div class="mry-main-title mry-title-center mry-p-0-40">
                        <div class="mry-numbering mry-fo">
                            <div class="mry-border-text">02</div>
                            <div class="mry-subtitle">Project</div>
                        </div>
                        <h3 class="mry-fo">Project gallery</h3>
                    </div>

                </div>
                <div class="col-lg-12">

                    <div class="mry-portfolio-frame">
                        <div class="mry-masonry-grid mry-without-descr mry-p-0-100" style="min-height: 53% !important;">
                            <div class="mry-grid-sizer"></div>

                            @if (file_exists( public_path() . '/img/light/projects/prjct-'.$project->id.'/1.jpg'))
                                <div class="mry-masonry-grid-item <?php if(file_exists( public_path() . '/img/light/projects/prjct-'.$project->id.'/2.jpg')) {echo 'mry-masonry-grid-item-50';} else {echo 'mry-masonry-grid-item-100';} ?> interior">

                                    <div class="mry-card-item">
                                        <div class="mry-card-cover-frame mry-mb-20 mry-fo">
                                            <img src="{{ asset('/img/light/projects/prjct-'.$project->id.'/1.jpg') }}" alt="project">
                                            <div class="mry-cover-overlay"></div>
                                            <div class="mry-hover-links">
                                                <a href="{{ asset('/img/light/projects/prjct-'.$project->id.'/1.jpg') }}" data-fancybox="works"
                                                    class="mry-zoom mry-magnetic-link"><span
                                                        class="mry-magnetic-object"><i
                                                            class="fas fa-expand"></i></span></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endif

                            @if (file_exists( public_path() . '/img/light/projects/prjct-'.$project->id.'/2.jpg'))
                                <div class="mry-masonry-grid-item mry-masonry-grid-item-50 mry-masonry-grid-item-h-x-2 repair">

                                    <div class="mry-card-item">
                                        <div class="mry-card-cover-frame mry-mb-20 mry-fo">
                                            <div class="mry-cover-overlay"></div>
                                            <img src="{{ asset('/img/light/projects/prjct-'.$project->id.'/2.jpg') }}" alt="project">
                                            <div class="mry-hover-links">
                                                <a href="{{ asset('/img/light/projects/prjct-'.$project->id.'/2.jpg') }}" data-fancybox="works"
                                                    class="mry-zoom mry-magnetic-link"><span
                                                        class="mry-magnetic-object"><i
                                                            class="fas fa-expand"></i></span></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endif

                            @if (file_exists( public_path() . '/img/light/projects/prjct-'.$project->id.'/3.jpg'))
                                <div class="mry-masonry-grid-item mry-masonry-grid-item-50 interior repair">

                                    <div class="mry-card-item">
                                        <div class="mry-card-cover-frame mry-mb-20 mry-fo">
                                            <img src="{{ asset('/img/light/projects/prjct-'.$project->id.'/3.jpg') }}" alt="project">
                                            <div class="mry-cover-overlay"></div>
                                            <div class="mry-hover-links">
                                                <a href="{{ asset('/img/light/projects/prjct-'.$project->id.'/3.jpg') }}" data-fancybox="works"
                                                    class="mry-zoom mry-magnetic-link"><span
                                                        class="mry-magnetic-object"><i
                                                            class="fas fa-expand"></i></span></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endif
                            
                            @if (file_exists( public_path() . '/img/light/projects/prjct-'.$project->id.'/4.jpg'))
                                <div class="mry-masonry-grid-item <?php if(file_exists( public_path() . '/img/light/projects/prjct-'.$project->id.'/5.jpg')) {echo 'mry-masonry-grid-item-50';} else {echo 'mry-masonry-grid-item-100';} ?> mry-masonry-grid-item-h-x-2 interior" 
                                    @if (!file_exists( public_path() . '/img/light/projects/prjct-'.$project->id.'/5.jpg')) style="left: 0% !important; width: 100% !important;" @endif>

                                    <div class="mry-card-item">
                                        <div class="mry-card-cover-frame mry-mb-20 mry-fo">
                                            <img src="{{ asset('/img/light/projects/prjct-'.$project->id.'/4.jpg') }}" alt="project">
                                            <div class="mry-cover-overlay"></div>
                                            <div class="mry-hover-links">
                                                <a href="{{ asset('/img/light/projects/prjct-'.$project->id.'/4.jpg') }}" data-fancybox="works"
                                                    class="mry-zoom mry-magnetic-link"><span
                                                        class="mry-magnetic-object"><i
                                                            class="fas fa-expand"></i></span></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endif

                            @if (file_exists( public_path() . '/img/light/projects/prjct-'.$project->id.'/5.jpg'))
                                <div class="mry-masonry-grid-item mry-masonry-grid-item-50 interior">

                                    <div class="mry-card-item">
                                        <div class="mry-card-cover-frame mry-mb-20 mry-fo">
                                            <img src="{{ asset('/img/light/projects/prjct-'.$project->id.'/5.jpg') }}" alt="project">
                                            <div class="mry-cover-overlay"></div>
                                            <div class="mry-hover-links">
                                                <a href="{{ asset('/img/light/projects/prjct-'.$project->id.'/5.jpg') }}" data-fancybox="works"
                                                    class="mry-zoom mry-magnetic-link"><span
                                                        class="mry-magnetic-object"><i
                                                            class="fas fa-expand"></i></span></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endif

                            @if (file_exists( public_path() . '/img/light/projects/prjct-'.$project->id.'/6.jpg'))
                                <div class="mry-masonry-grid-item mry-masonry-grid-item-50 interior">

                                    <div class="mry-card-item">
                                        <div class="mry-card-cover-frame mry-mb-20 mry-fo">
                                            <img src="{{ asset('/img/light/projects/prjct-'.$project->id.'/6.jpg') }}" alt="project">
                                            <div class="mry-cover-overlay"></div>
                                            <div class="mry-hover-links">
                                                <a href="{{ asset('/img/light/projects/prjct-'.$project->id.'/6.jpg') }}" data-fancybox="works"
                                                    class="mry-zoom mry-magnetic-link"><span
                                                        class="mry-magnetic-object"><i
                                                            class="fas fa-expand"></i></span></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endif

                            @if (file_exists( public_path() . '/img/light/projects/prjct-'.$project->id.'/7.jpg'))
                                <div class="mry-masonry-grid-item mry-masonry-grid-item-100 interior" style="left: 0% !important;">

                                    <div class="mry-card-item">
                                        <div class="mry-card-cover-frame mry-mb-20 mry-fo">
                                            <img src="{{ asset('/img/light/projects/prjct-'.$project->id.'/7.jpg') }}" alt="project">
                                            <div class="mry-cover-overlay"></div>
                                            <div class="mry-hover-links">
                                                <a href="{{ asset('/img/light/projects/prjct-'.$project->id.'/7.jpg') }}" data-fancybox="works"
                                                    class="mry-zoom mry-magnetic-link"><span
                                                        class="mry-magnetic-object"><i
                                                            class="fas fa-expand"></i></span></a>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            @endif

                        </div>
                    </div>
                </div>
                <div class="col-lg-8">

                    <div class="mry-mb-100 mry-text-center">
                        <div class="mry-numbering mry-fo">
                            <div class="mry-border-text">03</div>
                            <div class="mry-subtitle">Summary</div>
                        </div>
                        <h3 class="mry-mb-40 mry-fo">Full Project Description</h3>
                        <p class="mry-text mry-fo justify">{{ $project->description }}</p>
                    </div>

                </div>
                {{-- <div class="col-lg-12">

                    <div class="mry-main-title mry-title-center mry-p-0-40">
                        <div class="mry-subtitle mry-mb-20 mry-fo">More projects</div>
                        <h2 class="mry-fo">Similar projects</h2>
                        <div class="mry-arrows mry-fo">
                            <div class="mry-sl-nav">
                                <div class="mry-prev mry-button-blog-prev mry-magnetic-link"><span
                                        class="mry-magnetic-object"><i class="fas fa-arrow-left"></i></span></div>
                                <div class="mry-next mry-button-blog-next mry-magnetic-link"><span
                                        class="mry-magnetic-object"><i class="fas fa-arrow-right"></i></span></div>
                            </div>
                            <div class="mry-label mry-fo">Slider Navigation</div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-12">

                    <div class="swiper-container mry-blog-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">

                                <div class="mry-card-item">
                                    <div class="mry-card-cover-frame mry-mb-20 mry-fo">
                                        <div class="mry-badge">interior</div>
                                        <img src="img/light/projects/prjct-7/fs/1.jpg" alt="project">
                                        <div class="mry-cover-overlay"></div>
                                        <div class="mry-hover-links">
                                            <a href="img/light/projects/prjct-7/fs/1.jpg"
                                                data-fancybox="works-slider"
                                                class="mry-zoom mry-magnetic-link"><span
                                                    class="mry-magnetic-object"><i
                                                        class="fas fa-expand"></i></span></a>
                                            <a href="project.html"
                                                class="mry-more mry-magnetic-link mry-anima-link"><span
                                                    class="mry-magnetic-object"><i
                                                        class="fas fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="mry-item-descr mry-fo">
                                        <h4 class="mry-mb-10"><a href="project.html">Horra Factory</a></h4>
                                        <div class="mry-text">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit.</div>
                                    </div>
                                </div>

                            </div>
                            <div class="swiper-slide">

                                <div class="mry-card-item">
                                    <div class="mry-card-cover-frame mry-mb-20 mry-fo">
                                        <div class="mry-badge">interior</div>
                                        <img src="img/light/projects/prjct-2/1.jpg" alt="project">
                                        <div class="mry-cover-overlay"></div>
                                        <div class="mry-hover-links">
                                            <a href="img/light/projects/prjct-2/fs/1.jpg"
                                                data-fancybox="works-slider"
                                                class="mry-zoom mry-magnetic-link"><span
                                                    class="mry-magnetic-object"><i
                                                        class="fas fa-expand"></i></span></a>
                                            <a href="project.html"
                                                class="mry-more mry-magnetic-link mry-anima-link"><span
                                                    class="mry-magnetic-object"><i
                                                        class="fas fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="mry-item-descr mry-fo">
                                        <h4 class="mry-mb-10"><a href="project.html">De Vita</a></h4>
                                        <div class="mry-text">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit.</div>
                                    </div>
                                </div>

                            </div>
                            <div class="swiper-slide">

                                <div class="mry-card-item">
                                    <div class="mry-card-cover-frame mry-mb-20 mry-fo">
                                        <div class="mry-badge">interior</div>
                                        <img src="img/light/projects/prjct-3/1.jpg" alt="project">
                                        <div class="mry-cover-overlay"></div>
                                        <div class="mry-hover-links">
                                            <a href="img/light/projects/prjct-3/fs/1.jpg"
                                                data-fancybox="works-slider"
                                                class="mry-zoom mry-magnetic-link"><span
                                                    class="mry-magnetic-object"><i
                                                        class="fas fa-expand"></i></span></a>
                                            <a href="project.html"
                                                class="mry-more mry-magnetic-link mry-anima-link"><span
                                                    class="mry-magnetic-object"><i
                                                        class="fas fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="mry-item-descr mry-fo">
                                        <h4 class="mry-mb-10"><a href="project.html">Apartment</a></h4>
                                        <div class="mry-text">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit.</div>
                                    </div>
                                </div>

                            </div>
                            <div class="swiper-slide">

                                <div class="mry-card-item">
                                    <div class="mry-card-cover-frame mry-mb-20 mry-fo">
                                        <div class="mry-badge">interior</div>
                                        <img src="img/light/projects/prjct-4/1.jpg" alt="project">
                                        <div class="mry-cover-overlay"></div>
                                        <div class="mry-hover-links">
                                            <a href="img/light/projects/prjct-4/fs/1.jpg"
                                                data-fancybox="works-slider"
                                                class="mry-zoom mry-magnetic-link"><span
                                                    class="mry-magnetic-object"><i
                                                        class="fas fa-expand"></i></span></a>
                                            <a href="project.html"
                                                class="mry-more mry-magnetic-link mry-anima-link"><span
                                                    class="mry-magnetic-object"><i
                                                        class="fas fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="mry-item-descr mry-fo">
                                        <h4 class="mry-mb-10"><a href="project.html">Al-Imran Mosque</a></h4>
                                        <div class="mry-text">Lorem ipsum dolor sit amet, consectetur adipisicing
                                            elit.</div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div> --}}

            </div>
        </div>
    </div>
    <!-- project end -->
    
@endsection

@section('js')
    <!-- canvas js -->
    <script src="/js/plugins/canvas-colored.js"></script>
@endsection