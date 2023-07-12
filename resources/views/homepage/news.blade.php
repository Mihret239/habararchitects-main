@extends('layout/mainlayout')

@section('page-content')
    <?php $page = $pageTitle;?>

    <canvas class="mry-dots" style="opacity: .3;"></canvas>

    <div class="mry-head-bg">
        <img src="img/light/projects/prjct-6/1.jpg" alt="background">
        <div class="mry-bg-overlay"></div>
    </div>

    <div class="mry-banner mry-p-140-0">
        <div class="container">
            <div class="mry-main-title mry-title-center">
                <div class="mry-subtitle mry-mb-20 mry-fo">News</div>
                <h3 class="mry-mb-20 mry-fo">{{ $news->title ?? '' }}<span class="mry-animation-el"></span></h3>
                <div class="mry-text mry-fo">{{ $news->short_desc ?? '' }}</div>
                <div class="mry-scroll-hint-frame">
                    <a class="mry-scroll-hint mry-smooth-scroll mry-magnetic-link mry-fo" href="#mry-anchor">
                        <span class="mry-magnetic-object"></span>
                    </a>
                    <div class="mry-label mry-fo">Scroll Down</div>
                </div>
            </div>
        </div>
    </div>

    <!-- publication -->
    <div class="mry-about mry-p-100-100">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-10">

                    <div class="mry-about-video mry-mb-100 mry-fo">
                        <div class="mry-video-cover-frame">
                            <img class="mry-video-cover" src="img/light/blog/4.jpg" alt="banner">
                            <div class="mry-cover-overlay"></div>
                            <div class="mry-curtain"></div>
                        </div>
                    </div>

                </div>

                <div class="col-lg-8">

                    <div class="mry-mb-100">
                        <div class="mry-subtitle mry-mb-20 mry-fo">29.01.2021</div>
                        <h3 class="mry-mb-40 mry-fo">Quidem magni eligendi adipisicing elit sed exercitationem</h3>
                        <p class="mry-text mry-mb-40 mry-fo">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam eius ab, dolores illo commodi totam hic molestias modi
                            reprehenderit corrupti odio consequuntur facilis ut rem fugiat, explicabo expedita sint quaerat magni blanditiis autem assumenda. Possimus fuga dolorum, animi
                            dolorem, saepe quas magnam sed perferendis, dolores repellendus, dolore quos aspernatur? Itaque blanditiis quod unde dignissimos nostrum quas, dolore maiores
                            excepturi eligendi quia, totam delectus dicta assumenda omnis enim. Quidem magni eligendi sed exercitationem harum corporis odit nostrum quae nam nisi officia
                            labore, et doloribus ratione tenetur modi odio officiis distinctio! Ducimus pariatur laborum omnis porro debitis labore, reiciendis doloribus non impedit.</p>
                        <h3 class="mry-mb-40 mry-fo">Totam delectus dicta assumenda</h3>
                        <p class="mry-text mry-fo">Delectus dicta assumenda omnis enim. Quidem magni eligendi sed exercitationem harum corporis odit nostrum quae nam nisi officia labore,
                            et doloribus ratione tenetur modi odio officiis distinctio! Ducimus pariatur laborum omnis porro debitis labore, reiciendis doloribus non impedit.</p>
                        <blockquote class="mry-fo">
                            {{ $news->quote }}
                        </blockquote>
                        <p class="mry-text mry-mb-40 mry-fo">Quaerat magni blanditiis autem assumenda. Possimus fuga dolorum, animi dolorem, saepe quas magnam sed perferendis, dolores
                            repellendus, dolore quos aspernatur? Itaque blanditiis quod unde dignissimos nostrum quas, dolore maiores excepturi eligendi quia, totam delectus dicta
                            assumenda omnis enim. Quidem magni eligendi sed exercitationem harum corporis odit nostrum quae nam nisi officia labore, et doloribus ratione tenetur modi odio
                            officiis distinctio! Ducimus pariatur laborum omnis porro debitis labore, reiciendis doloribus non impedit.</p>
                        <p class="mry-text mry-mb-40 mry-fo">Deiciendis doloribus non impedit.</p>
                    </div>

                </div>
                <div class="col-lg-12">

                    <div class="mry-main-title mry-title-center mry-p-0-40">
                        <div class="mry-subtitle mry-mb-20 mry-fo">Popular</div>
                        <h2 class="mry-fo">Popular Publications</h2>
                        <div class="mry-arrows mry-fo">
                            <div class="mry-sl-nav">
                                <div class="mry-prev mry-button-blog-prev mry-magnetic-link"><span class="mry-magnetic-object"><i class="fas fa-arrow-left"></i></span></div>
                                <div class="mry-next mry-button-blog-next mry-magnetic-link"><span class="mry-magnetic-object"><i class="fas fa-arrow-right"></i></span></div>
                            </div>
                            <div class="mry-label mry-fo">Slider Navigation</div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-12">

                    <div class="swiper-container mry-blog-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">

                                <div class="mry-card-item mry-fade-object">
                                    <div class="mry-card-cover-frame mry-mb-20 mry-fo">
                                        <div class="mry-badge">29.01.2021</div>
                                        <img src="img/light/blog/1.jpg" alt="project" >
                                        <div class="mry-cover-overlay"></div>
                                        <div class="mry-hover-links">
                                            <a href="publication.html" class="mry-more mry-magnetic-link middled mry-anima-link"><span class="mry-magnetic-object"><i
                                                        class="fas fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="mry-item-descr">
                                        <h4 class="mry-mb-10 mry-fo"><a href="publication.html">Omuli Museum of the Horse</a></h4>
                                        <div class="mry-text mry-mb-10 mry-fo">Dolor sit amet, consectetur adipisicing elit. Ad veniam, facere officia.</div>
                                        <div class="mry-fo"><a href="publication.html" class="mry-link mry-default-link">Read more</a></div>
                                    </div>
                                </div>

                            </div>
                            <div class="swiper-slide">

                                <div class="mry-card-item mry-fade-object">
                                    <div class="mry-card-cover-frame mry-mb-20 mry-fo">
                                        <div class="mry-badge">29.01.2021</div>
                                        <img src="img/light/blog/2.jpg" alt="project" >
                                        <div class="mry-cover-overlay"></div>
                                        <div class="mry-hover-links">
                                            <a href="publication.html" class="mry-more mry-magnetic-link middled mry-anima-link"><span class="mry-magnetic-object"><i
                                                        class="fas fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="mry-item-descr">
                                        <h4 class="mry-mb-10 mry-fo"><a href="publication.html">Spirala Community Home</a></h4>
                                        <div class="mry-text mry-mb-10 mry-fo">Dolor sit amet, consectetur adipisicing elit. Ad veniam, facere officia.</div>
                                        <div class="mry-fo"><a href="publication.html" class="mry-link mry-default-link">Read more</a></div>
                                    </div>
                                </div>

                            </div>
                            <div class="swiper-slide">

                                <div class="mry-card-item mry-fade-object">
                                    <div class="mry-card-cover-frame mry-mb-20 mry-fo">
                                        <div class="mry-badge">29.01.2021</div>
                                        <img src="img/light/blog/3.jpg" alt="project" >
                                        <div class="mry-cover-overlay"></div>
                                        <div class="mry-hover-links">
                                            <a href="publication.html" class="mry-more mry-magnetic-link middled mry-anima-link"><span class="mry-magnetic-object"><i
                                                        class="fas fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="mry-item-descr">
                                        <h4 class="mry-mb-10 mry-fo"><a href="publication.html">Tiny Kiwi Meditation Cabin</a></h4>
                                        <div class="mry-text mry-mb-10 mry-fo">Dolor sit amet, consectetur adipisicing elit. Ad veniam, facere officia.</div>
                                        <div class="mry-fo"><a href="publication.html" class="mry-link mry-default-link">Read more</a></div>
                                    </div>
                                </div>

                            </div>
                            <div class="swiper-slide">

                                <div class="mry-card-item mry-fade-object">
                                    <div class="mry-card-cover-frame mry-mb-20 mry-fo">
                                        <div class="mry-badge">29.01.2021</div>
                                        <img src="img/light/blog/4.jpg" alt="project" >
                                        <div class="mry-cover-overlay"></div>
                                        <div class="mry-hover-links">
                                            <a href="publication.html" class="mry-more mry-magnetic-link middled mry-anima-link"><span class="mry-magnetic-object"><i
                                                        class="fas fa-arrow-right"></i></span></a>
                                        </div>
                                    </div>
                                    <div class="mry-item-descr">
                                        <h4 class="mry-mb-10 mry-fo"><a href="publication.html">Sleeping Pods on a Cliff</a></h4>
                                        <div class="mry-text mry-mb-10 mry-fo">Dolor sit amet, consectetur adipisicing elit. Ad veniam, facere officia.</div>
                                        <div class="mry-fo"><a href="publication.html" class="mry-link mry-default-link">Read more</a></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
    <!-- publication end -->
    
@endsection

@section('js')
    <!-- canvas js -->
    <script src="/js/plugins/canvas-colored.js"></script>
@endsection