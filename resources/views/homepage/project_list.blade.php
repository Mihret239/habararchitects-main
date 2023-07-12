@extends('layout/mainlayout')

@section('page-content')
    <?php $page = $pageTitle;?>

    <div class="mry-head-bg">
        <img src="{{ asset('/img/light/projects/prjct-' . mt_rand(1, 24) . '/fs/1.jpg') }}" alt="background">
        <div class="mry-bg-overlay"></div>
    </div>

    <div class="mry-banner mry-p-100-0">
        <div class="container">
            <div class="mry-main-title mry-title-center">
                {{-- <div class="mry-subtitle mry-mb-20 mry-fo">Portfolio</div>
                <h1 class="mry-mb-20 mry-fo">Explore Our Amazing<br><span class="mry-border-text">Professional
                        Cases</span><span class="mry-animation-el"></span></h1> --}}
                {{-- <div class="mry-text mry-fo">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div> --}}
                <div class="mry-scroll-hint-frame">
                    <a class="mry-scroll-hint mry-smooth-scroll mry-magnetic-link mry-fo" href="#mry-anchor">
                        <span class="mry-magnetic-object"></span>
                    </a>
                    <div class="mry-label mry-fo">Scroll Down</div>
                </div>
            </div>
        </div>
    </div>

    <!-- portfolio -->
    <div class="mry-portfolio mry-p-50-100" style="position: relative; z-index: 2000;">
        <div class="container">

            <div class="mry-filter mry-mb-40 mry-fo">
                <a href="#" data-filter="*" class="mry-card-category mry-default-link mry-current">All
                    Categories</a>
                <a href="#" data-filter=".large" class="mry-card-category mry-default-link">Large</a>
                <a href="#" data-filter=".medium" class="mry-card-category mry-default-link">medium</a>
                <a href="#" data-filter=".small" class="mry-card-category mry-default-link">Small</a>
            </div>

            <div class="mry-portfolio-frame">
                <div class="mry-masonry-grid mry-3-col">
                    <div class="mry-grid-sizer"></div>

                    @if (!$projects->isEmpty())
                        @foreach ($projects as $project)
                            <div class="mry-masonry-grid-item mry-masonry-grid-item-33 {{ $project->category }}">

                                <div class="mry-card-item">
                                    <div class="mry-card-cover-frame mry-mb-20 mry-fo">
                                        <div class="mry-badge">{{ $project->category }}</div>
                                        <div class="mry-cover-overlay"></div>
                                        <div class="image"><img src="{{ asset('/img/light/projects/prjct-'.$project->id.'/fs/1.jpg') }}" alt="project"></div>
                                        <div class="mry-hover-links">
                                            <a href="{{ asset('/img/light/projects/prjct-'.$project->id.'/fs/1.jpg') }}" data-fancybox="works"
                                                class="mry-zoom mry-magnetic-link middled"><span class="mry-magnetic-object"><i
                                                        class="fas fa-expand"></i></span></a>
                                            <a href="{{ route('habar.project', $project->id ?? '1') }}" class="mry-more mry-magnetic-link mry-anima-link middled"><span
                                                    class="mry-magnetic-object"><i
                                                        class="fas fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="mry-item-descr mry-fo">
                                        <h4 class="mry-mb-10" style="overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical;">
                                            <a href="{{ route('habar.project', $project->id ?? '1') }}">@if ($project->code_name != '') {{ $project->code_name }} @else {{ $project->title }} @endif</a>
                                        </h4>
                                        <div class="mry-text" style="overflow: hidden; text-align: justify; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; font-weight: 300 !important;">{{ $project->description }}
                                        </div>
                                    </div>
                                </div>

                            </div>
                        @endforeach
                    @endif
                    
                </div>
            </div>
        </div>
    </div>
    <!-- portfolio end -->
        <canvas id="canvas" class="mry-dots" style="opacity: .4;"></canvas>
    <canvas id="canvas1" class="mry-dots" style="opacity: .5; top: 100vh"></canvas>
    <canvas id="canvas2" class="mry-dots" style="opacity: .6; top: 200vh"></canvas>
    {{-- <canvas id="canvas3" class="mry-dots" style="opacity: .7; top: 300vh"></canvas> --}}
    {{-- <canvas id="canvas4" class="mry-dots" style="opacity: .4; top: 400vh"></canvas> --}}
    {{-- <canvas id="canvas5" class="mry-dots" style="opacity: .4; top: 500vh"></canvas> --}}

@endsection

@section('js')
    <!-- canvas js -->
    <script src="/js/plugins/canvas-colored.js"></script>
    <!-- canvas2 js -->
    <script src="/js/plugins/canvas-colored2.js"></script>
    <!-- canvas3 js -->
    <script src="/js/plugins/canvas-colored3.js"></script>
    <!-- canvas4 js -->
    {{-- <script src="/js/plugins/canvas-colored4.js"></script> --}}
    <!-- canvas5 js -->
    {{-- <script src="/js/plugins/canvas-colored5.js"></script> --}}
    <!-- canvas6 js -->
    {{-- <script src="/js/plugins/canvas-colored6.js"></script> --}}
@endsection