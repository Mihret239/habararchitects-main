@extends('layout/mainlayout')

@section('page-content')
    <?php $page = $pageTitle;?>

    <canvas class="mry-dots" style="opacity: .3;"></canvas>
    
    <div class="mry-head-bg">
        <img src="img/light/projects/prjct-7/1.jpg" alt="background">
        <div class="mry-bg-overlay"></div>
    </div>

    <div class="mry-banner mry-p-140-0">
        <div class="container">
            <div class="mry-main-title mry-title-center">
                <div class="mry-subtitle mry-mb-20 mry-fo">Blog</div>
                <h3 class="mry-mb-20 mry-fo">Explore Our News Section<span class="mry-animation-el"></span></h3>
                <div class="mry-text mry-fo">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</div>
                <div class="mry-scroll-hint-frame">
                    <a class="mry-scroll-hint mry-smooth-scroll mry-magnetic-link mry-fo" href="#mry-anchor">
                        <span class="mry-magnetic-object"></span>
                    </a>
                    <div class="mry-label mry-fo">Scroll Down</div>
                </div>
            </div>
        </div>
    </div>

    <!-- blog -->
    <div class="mry-portfolio mry-p-100-100" id="mry-anchor">
        <div class="container">

            <div class="mry-portfolio-frame">
                <div class="mry-masonry-grid mry-3-col">
                    <div class="mry-grid-sizer"></div>

                    @if (!$newses->isEmpty())
                        @foreach ($newses as $news)
                            <div class="mry-masonry-grid-item mry-masonry-grid-item-33 interior">
                                <div class="mry-card-item mry-fo">
                                    <div class="mry-card-cover-frame mry-mb-20">
                                        <div class="mry-badge">29.01.2021</div>
                                        <img src="{{ asset('/img/light/projects/prjct-'.$news->id.'/fs/1.jpg') }}" alt="project" >
                                        <div class="mry-cover-overlay"></div>
                                        <div class="mry-hover-links">
                                            <a href="{{ route('habar.news', $news->id ?? '1') }}" class="mry-more mry-magnetic-link middled mry-anima-link"><span class="mry-magnetic-object"><i
                                                        class="fas fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="mry-item-descr">
                                        <h4 class="mry-mb-10 mry-fo"><a href="{{ route('habar.news', $news->id ?? '1') }}">{{ $news->title }}</a></h4>
                                        <div class="mry-text mry-mb-10 mry-fo">{{ $news->description }}</div>
                                        <div class="mry-fo"><a href="{{ route('habar.news', $news->id ?? '1') }}" class="mry-link mry-default-link">Read more</a></div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

            <ul class="mry-pagination mry-fo">
                <li class="mry-active"><a href="#." class="mry-default-link"><span>1</span></a></li>
                {{-- <li><a href="#." class="mry-default-link"><span>2</span></a></li>
                <li><a href="#." class="mry-default-link"><span>3</span></a></li>
                <li><a href="#." class="mry-default-link"><span>4</span></a></li>
                <li><a href="#." class="mry-default-link"><span>5</span></a></li> --}}
            </ul>

        </div>
    </div>
    <!-- blog end -->
@endsection

@section('js')
    <!-- canvas js -->
    <script src="/js/plugins/canvas-colored.js"></script>
@endsection