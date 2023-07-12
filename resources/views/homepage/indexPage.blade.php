@extends('layout/mainlayout')

@section('page-content')
    <?php $page = $pageTitle;?>

    <canvas class="mry-dots"></canvas>

    <div class="mry-slider-pagination-frame-left">
        {{-- <div class="mry-slider-pagination"></div> --}}
        <div class="mry-slider-arrows">
            <div class="mry-button-prev mry-magnetic-link"><span class="mry-magnetic-object"><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.5 150.89">
                <defs>
                    <style>
                        .cls-1 {
                            fill: #fff;
                            opacity: 0.5;
                        }
                    </style>
                </defs>
                <polygon class="cls-1" points="31.5 150.89 0 74.81 31.5 0 31.5 150.89" />
            </svg></span></div>
        </div>
    </div>

    <div class="swiper-container mry-main-slider">
        <div class="swiper-wrapper">
            @if (!$projects->isEmpty())
                @foreach ($projects as $project)
                    <div class="swiper-slide">
                        
                        <!-- project -->
                        <div class="mry-project-slider-item">
                            <div class="mry-project-frame">
                                <div class="mry-cover-frame">
                                    <img class="mry-project-cover mry-position-center" src="{{ asset('/img/light/projects/prjct-'.$project->id.'/fs/1.jpg') }}"
                                        alt="Project" data-swiper-parallax="500" data-swiper-parallax-scale="1.4">
                                    <div class="mry-cover-overlay mry-gradient-overlay"></div>
                                    <div class="mry-loading-curtain"></div>
                                </div>
                                <div class="mry-main-title-frame">
                                    <div class="container">
                                        <div class="mry-main-title" data-swiper-parallax-x="30%" data-swiper-parallax-scale=".7"
                                            data-swiper-parallax-opacity="0" data-swiper-parallax-duration="1000">
                                            <div class="mry-subtitle mry-mb-20 white-text">
                                                @foreach (json_decode($project->types) ?? '' as $project_types)
                                                    {{ $project_types }}@if(!$loop->last)&nbsp;+@endif
                                                @endforeach
                                            </div>
                                            {{-- <h1 class="mry-mb-30">{{ $project->title }}<br><span class="mry-border-text">{{ $project->code_name }}</span></h1> --}}
                                            <h1 class="mry-mb-30 white-text">{{ $project->code_name }}</h1>
                                            <div class="mry-text mry-mb-30 white-text" style="max-width:600px; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; 
                                                        -webkit-line-clamp: 2; -webkit-box-orient: vertical;">{{ $project->description }}</div>
                                            {{-- <a class="mry-btn mry-default-link mry-anima-link"
                                                href="{{ route('habar.project', $project->id ?? '1' )}}">View Project</a>
                                            <a class="mry-btn-text mry-default-link mry-anima-link"
                                                href="{{ route('habar.project_list')}}">All Projects</a> --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- project end -->

                    </div>
                @endforeach
            @endif
            {{-- <div class="swiper-slide">

                <!-- project -->
                <div class="mry-project-slider-item">
                    <div class="mry-project-frame">
                        <div class="mry-cover-frame">
                            <img class="mry-project-cover mry-position-center"
                                src="/img/light/projects/prjct-1/fs/1.jpg" alt="Project" data-swiper-parallax="500"
                                data-swiper-parallax-scale="1.4">
                            <div class="mry-cover-overlay mry-gradient-overlay"></div>
                            <div class="mry-loading-curtain"></div>
                        </div>
                        <div class="mry-main-title-frame">
                            <div class="container">
                                <div class="mry-main-title" data-swiper-parallax-x="30%"
                                    data-swiper-parallax-scale=".7" data-swiper-parallax-opacity="0"
                                    data-swiper-parallax-duration="1000">
                                    <div class="mry-subtitle mry-mb-20">Architecture</div>
                                    <h1 class="mry-mb-30">IEC Youth Center<br><span class="mry-border-text">Passion
                                            Project</span></h1>
                                    <div class="mry-text mry-mb-30">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit.<br>Adipisci distinctio iure, rerum non fugit.</div>
                                    <a class="mry-btn mry-default-link mry-anima-link" href="{{ route('habar.project', $project->id ?? '1' )}}">View
                                        Project</a>
                                    <a class="mry-btn-text mry-default-link mry-anima-link"
                                        href="{{ route('habar.project_list')}}">All Projects</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- project end -->

            </div>
            <div class="swiper-slide">

                <!-- project -->
                <div class="mry-project-slider-item">
                    <div class="mry-project-frame">
                        <div class="mry-cover-frame">
                            <img class="mry-project-cover mry-position-right"
                                src="/img/light/projects/prjct-2/fs/1.jpg" alt="Project" data-swiper-parallax="500"
                                data-swiper-parallax-scale="1.4">
                            <div class="mry-cover-overlay mry-gradient-overlay"></div>
                        </div>
                        <div class="mry-main-title-frame">
                            <div class="container">
                                <div class="mry-main-title" data-swiper-parallax-x="30%"
                                    data-swiper-parallax-scale=".7" data-swiper-parallax-opacity="0"
                                    data-swiper-parallax-duration="1000">
                                    <div class="mry-subtitle mry-mb-20">Architecture</div>
                                    <h1 class="mry-mb-30">Horra Factory<br><span
                                            class="mry-border-text">Residence</span><span
                                            class="mry-animation-el"></span></h1>
                                    <div class="mry-text mry-mb-30">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit.<br>Adipisci distinctio iure, rerum non fugit.</div>
                                    <a class="mry-btn mry-default-link mry-anima-link" href="{{ route('habar.project', $project->id ?? '1' )}}">View
                                        Project</a>
                                    <a class="mry-btn-text mry-default-link mry-anima-link"
                                        href="{{ route('habar.project_list')}}">All Projects</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- project end -->

            </div>
            <div class="swiper-slide">

                <!-- project -->
                <div class="mry-project-slider-item">
                    <div class="mry-project-frame">
                        <div class="mry-cover-frame">
                            <img class="mry-project-cover" src="/img/light/projects/prjct-3/fs/1.jpg" alt="Project"
                                data-swiper-parallax="500" data-swiper-parallax-scale="1.4">
                            <div class="mry-cover-overlay mry-gradient-overlay"></div>
                        </div>
                        <div class="mry-main-title-frame">
                            <div class="container">
                                <div class="mry-main-title" data-swiper-parallax-x="30%"
                                    data-swiper-parallax-scale=".7" data-swiper-parallax-opacity="0"
                                    data-swiper-parallax-duration="1000">
                                    <div class="mry-subtitle mry-mb-20">Interior design</div>
                                    <h1 class="mry-mb-30">Amibara Mixed Use<br><span
                                            class="mry-border-text">Apartment</span><span
                                            class="mry-animation-el"></span></h1>
                                    <div class="mry-text mry-mb-30">Lorem ipsum dolor sit amet, consectetur
                                        adipisicing elit.<br>Adipisci distinctio iure, rerum non fugit.</div>
                                    <a class="mry-btn mry-default-link mry-anima-link" href="{{ route('habar.project', $project->id ?? '1' )}}">View
                                        Project</a>
                                    <a class="mry-btn-text mry-default-link mry-anima-link"
                                        href="{{ route('habar.project_list')}}">All Projects</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- project end -->

            </div> --}}
        </div>
    </div>

    <div class="mry-slider-pagination-frame">
        {{-- <div class="mry-slider-pagination"></div> --}}
        <div class="mry-slider-arrows">
            <div class="mry-button-next mry-magnetic-link"><span class="mry-magnetic-object"><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 31.5 150.89">
                <defs>
                    <style>
                        .cls-1 {
                            fill: #fff;
                            opacity: 0.5;
                        }
                    </style>
                </defs>
                <polygon class="cls-1" points="0 150.89 31.5 74.81 0 0 0 150.89" />
            </svg></span></div>
        </div>
    </div>

    <div class="mry-slider-nav-panel">
        <div class="container">
            <div class="mry-slider-progress-bar-frame">
                <div class="mry-slider-progress-bar">
                    <div class="mry-progress"></div>
                </div>
            </div>
        </div>

        {{-- <div class="mry-slider-arrows">
            <div class="mry-label">Slider Navigation</div>
            <div class="mry-button-prev mry-magnetic-link"><span class="mry-magnetic-object"><i
                        class="fal fa-chevron-left"></i></span></div>
            <div class="mry-button-next mry-magnetic-link"><span class="mry-magnetic-object"><i
                        class="fal fa-chevron-right"></i></span></div>
        </div> --}}
    </div>

@endsection

{{-- @section('js')
    <!-- canvas js -->
    <script src="/js/plugins/canvas.js"></script>
@endsection --}}