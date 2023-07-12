<!DOCTYPE html>
<html lang="en-US">
    <head>
        <canvas id="mry-dots"></canvas>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <style>
            canvas#mry-dots {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: 9999;
                pointer-events: none;
            }
        </style>
        <!-- color of address bar in mobile browser -->
        <meta name="theme-color" content="#28292C">
        <!-- favicon  -->
        <link rel="shortcut icon" href="/img/light/favicon.png" type="image/x-icon">
        <!-- bootstrap css -->
        <link rel="stylesheet" href="/css/plugins/bootstrap.min.css">
        <!-- font awesome css -->
        <link rel="stylesheet" href="/css/plugins/font-awesome.min.css">
        <!-- swiper css -->
        <link rel="stylesheet" href="/css/plugins/swiper.min.css">
        <!-- fancybox css -->
        <link rel="stylesheet" href="/css/plugins/fancybox.min.css">
        <!-- mapbox css -->
        <link href="/css/plugins/mapbox-style.css" rel='stylesheet'>
        <!-- main css -->
        <link rel="stylesheet" href="/css/style-light.css">

        <title>{{ $pageTitle ?? '' }}</title>

		{{-- online bootstrap js & jQuery --}}
		<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>

    </head>

    <body>
        <div class="mry-app">
    
            <!-- preloader -->
            <div class="mry-preloader mry-active">
                <div class="mry-preloader-content">
                    <img class="mry-logo mry-mb-20" src="/img/light/logo-loading.svg" alt="Habar">
                    <p>HABAR</p>
                    <div class="mry-loader-bar">
                        <div class="mry-loader"></div>
                    </div>
                    <div class="mry-label">Please wait</div>
                </div>
            </div>
            <!-- preloader end -->
    
            <!-- cursor -->
            <div class="mry-magic-cursor">
                <div class="mry-ball">
                    <div class="mry-loader">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            x="0px" y="0px" width="30px" height="30px" viewBox="0 0 50 50"
                            style="enable-background:new 0 0 50 50;" xml:space="preserve">
                            <path
                                d="M25.251,6.461c-10.318,0-18.683,8.365-18.683,18.683h4.068c0-8.071,6.543-14.615,14.615-14.615V6.461z">
                                <animateTransform attributeType="xml" attributeName="transform" type="rotate" from="0 25 25"
                                    to="360 25 25" dur="0.6s" repeatCount="indefinite" />
                            </path>
                        </svg>
                    </div>
                </div>
            </div>
            <!-- cursor end -->

            <?php if($page === 'Habar Architects') : ?>

<!-- top panel -->



<nav class="navbar navbar-expand-lg navbar-light">
  <div class="navbar-brand">
	<div class="mry-logo-frame">
                        <a href="{{ route('habar.home') }}" class="mry-default-link mry-anima-link">
                            <img class="mry-logo" src="/img/light/logo.svg" alt="Habar">
                        </a>
                        <div class="habar-arch" style="margin-left: 50px;">
                            <span class="habar white-text glow-white" style=" position: absolute; top: 35px; line-height: 1; cursor: pointer;"><a href="{{ route('habar.home') }}">HABAR</a></span>
                            <span class="arch white-text glow-white" style=" position: absolute; line-height: 1; cursor: pointer;"><a href="{{ route('habar.home') }}">Architects</a></span>
                        </div>
                    </div>
				</div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto justify-content-end my-list">
      <li class="nav-item active">
        <a href="{{ route('habar.project_list') }}" class="white-text glow-white">Projects</a>
      </li>
      <li class="nav-item">
        <a href="{{ route('habar.about') }}" class="white-text glow-white">About</a>
      </li>
      <li class="nav-item dropdown">
        <a href="{{ route('habar.contact') }}" class="white-text glow-white">Contact Us</a>
      </li>
	  <li class="nav-item dropdown">
        <a href="{{ route('habar.news_list') }}" class="white-text glow-white">News</a>
      </li>
	  <li class="nav-item dropdown">
        <a href="https://drongopma.com/login/" target="_blank" class="white-text glow-white">Login</a>
      </li>
      
    </ul>
    
  </div>
</nav>









                <!-- top panel -->
                <div style="display: none">
                    <div class="mry-logo-frame">
                        <a href="{{ route('habar.home') }}" class="mry-default-link mry-anima-link">
                            <img class="mry-logo" src="/img/light/logo.svg" alt="Habar">
                        </a>
                        <div class="habar-arch" style="margin-left: 50px;">
                            <span class="white-text glow-white" style="font-size: 37px; position: absolute; top: 22px; line-height: 1; cursor: pointer;"><a href="{{ route('habar.home') }}">HABAR</a></span>
                            <span class="white-text glow-white" style="font-size: 24px; position: absolute; line-height: 1; cursor: pointer;"><a href="{{ route('habar.home') }}">Architects</a></span>
                        </div>
                    </div>
                    <div class="right" style="top:13px;">
                        <div>
                            <a href="{{ route('habar.project_list') }}" class="white-text glow-white">Projects</a>
                        </div>
                        <div>
                            <a href="{{ route('habar.about') }}" class="white-text glow-white">About</a>
                        </div>
                        <div>
                            <a href="{{ route('habar.contact') }}" class="white-text glow-white">Contact Us</a>
                        </div>
                        <div>
                            <a href="{{ route('habar.news_list') }}" class="white-text glow-white">News</a>
                        </div>
                        <div>
                            <a href="https://drongopma.com/login/" target="_blank" class="white-text glow-white">Login</a>
                        </div>
                        <div class="mry-menu-button-frame">
                            <div class="mry-label">&nbsp;</div>
                        </div>
                    </div>
                </div>
                <!-- top panel end -->
            <?php endif; ?>

            <?php if($page !== 'Habar Architects') : ?>
                <!-- top panel -->
				{{-- ///////////////////////////// --}}

				
<nav class="navbar navbar-expand-lg navbar-light">
  <div class="navbar-brand">
					<div class="mry-logo-frame" style="margin-left: 40px; width: 110px;">
                        <a href="{{ route('habar.home') }}" class="mry-default-link mry-anima-link">
                            <img class="mry-logo" src="/img/light/logo-loading.svg" alt="Habar">
                        </a>
                        <div class="habar-arch" style="margin-left: 50px;">
							{{-- 37px --}}
                            <span class="habar" style="color: #84211c; position: absolute; top: 35px; line-height: 1;">HABAR</span>
                            <span class="arch" style="color: #84211c; position: absolute; line-height: 1;">Architects</span>
                        </div>
                    </div>
				</div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto justify-content-end my-list">
      <li class="nav-item active">
        <a href="{{ route('habar.project_list') }}" style="color: #84211c;">Projects</a>
      </li>
      <li class="nav-item">
        <a href="{{ route('habar.about') }}" style="color: #84211c;">About</a>
      </li>
      <li class="nav-item dropdown">
        <a href="{{ route('habar.contact') }}" style="color: #84211c;">Contact Us</a>
      </li>
	  <li class="nav-item dropdown">
        <a href="{{ route('habar.news_list') }}" style="color: #84211c;">News</a>
      </li>
	  <li class="nav-item dropdown">
        <a href="https://drongopma.com/login/" target="_blank" style="color: #84211c;">Login</a>
      </li>
      
    </ul>
    
  </div>
  
</nav>


				{{-- ///////////////////////////// --}}



                <div class="mry-top-panel" style="background: linear-gradient(0deg, #ffffff27, #ffffff) !important; display:none">
                    <div class="mry-logo-frame">
                        <a href="{{ route('habar.home') }}" class="mry-default-link mry-anima-link">
                            <img class="mry-logo" src="/img/light/logo-loading.svg" alt="Habar">
                        </a>
                        <div style="margin-left: 50px;">
                            <span style="font-size: 37px; color: #84211c; position: absolute; top: 22px; line-height: 1;">HABAR</span>
                            <span style="font-size: 24px; color: #84211c; position: absolute; line-height: 1;">Architects</span>
                        </div>
                    </div>
                    <div class="right" style="top:13px;">
                        <div>
                            <a href="{{ route('habar.project_list') }}" style="color: #84211c;">Projects</a>
                        </div>
                        <div>
                            <a href="{{ route('habar.about') }}" style="color: #84211c;">About</a>
                        </div>
                        <div>
                            <a href="{{ route('habar.contact') }}" style="color: #84211c;">Contact Us</a>
                        </div>
                        <div>
                            <a href="{{ route('habar.news_list') }}" style="color: #84211c;">News</a>
                        </div>
                        <div>
                            <a href="https://drongopma.com/login/" target="_blank" style="color: #84211c;">Login</a>
                        </div>
                        <div class="mry-menu-button-frame">
                            <div class="mry-label">&nbsp;</div>
                        </div>
                    </div>
                </div>
                <!-- top panel end -->
            <?php endif; ?>

            <!-- menu -->
            {{-- <div class="mry-menu">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-md-4">
                            <nav id="mry-dynamic-menu">
                                <ul>
                                    <li class="menu-item <?php if($page == 'Habar Architects') {echo 'current-menu-item';} ?>"><a href="{{ route('habar.home')}}"
                                            class="mry-default-link">Home</a></li>
                                    <li class="menu-item <?php if($page == 'About Habar Architects') {echo 'current-menu-item';} ?>"><a href="{{ route('habar.about')}}" class="mry-anima-link mry-default-link">About</a>
                                    </li>
                                    <li class="menu-item <?php if($page == 'Habar Architects — Project List') {echo 'current-menu-item';} ?>"><a href="{{ route('habar.project_list')}}" class="mry-default-link">Projects</a></li>
                                    <li class="menu-item <?php if($page == 'Contact Habar Architects') {echo 'current-menu-item';} ?>"><a href="{{ route('habar.contact')}}" class="mry-anima-link mry-default-link">Contact</a>
                                    </li>
                                </ul>
                            </nav>
            
                        </div>
                        <div class="col-md-4">
                            <div class="mry-info-box-frame">
                                <div class="mry-info-box">
                                    <div class="mry-mb-20">
                                        <div class="mry-label mry-mb-5">Country:</div>
                                        <div class="mry-text">Ethiopia</div>
                                    </div>
                                    <div class="mry-mb-20">
                                        <div class="mry-label mry-mb-5">City:</div>
                                        <div class="mry-text">Addis Ababa</div>
                                    </div>
                                    <div class="mry-mb-20">
                                        <div class="mry-label mry-mb-5">Adress:</div>
                                        <div class="mry-text">Bole, Gulf Aziz bld., Office #305</div>
                                    </div>
                                    <div class="mry-mb-20">
                                        <div class="mry-label mry-mb-5">Email:</div>
                                        <a class="mry-text mry-default-link"
                                            href="mailto:contact@habararchitects.com">contact@habararchitects.com</a>
                                    </div>
                                    <div>
                                        <div class="mry-label mry-mb-5">Phone:</div>
                                        <a class="mry-text mry-default-link" href="#.">+251 91 145 85**</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!-- menu end -->
        
            <div class="transition-fade">
                <div class="mry-content-frame" id="scroll">
                    {{-- Page content --}}
                    @yield('page-content')
                    {{-- End of Page content--}}
                    
                    <?php if($page !== 'Habar Architects') : ?>
                        <!-- footer -->
                        <footer class="mry-footer">
                            <!-- <div class="container">
                                                    <div class="mry-main-title mry-title-center mry-p-0-100">
                                                        <div class="mry-subtitle mry-mb-20 mry-fo">Call to action</div>
                                                        <h2 class="mry-h1 mry-mb-20 mry-fo">We have an offer <span class="mry-border-text">for you</span></h2>
                                                        <div class="mry-text mry-mb-30  mry-fo">Interesting? Enter your email address to find out</div>
                                                        <div class="mry-fo">
                                                            <a href="contact.html" class="mry-anima-link mry-btn mry-btn-color mry-default-link">Let's discuss</a>
                                                            <a href="portfolio-box-1.html" class="mry-anima-link  mry-btn-text mry-default-link">Portfolio</a>
                                                        </div>
                                                    </div>
                                                </div> -->
                            <div class="mry-footer-copy">
                                <div class="container">
                                    <div style="color: #91191C;">Habar © 2022</div>
                                    <ul class="mry-social">
                                        <li><a href="#."><i class="fab fa-facebook-f" style="color: #91191C;"></i></a></li>
                                        <li><a href="#."><i class="fab fa-instagram" style="color: #91191C;"></i></a></li>
                                        <li><a href="#."><i class="fab fa-google-plus" style="color: #91191C;"></i></a></li>
                                        <li><a href="#."><i class="fab fa-twitter" style="color: #91191C;"></i></a></li>
                                    </ul>
                                    <div><a href="tel:+2519115664**" class="mry-default-link" style="color: #91191C;">+251 91 156 64**</a></div>
                                </div>
                            </div>
                        </footer>
                        <!-- footer end -->
                        
                        <div class="mry-head-bg mry-head-bottom">
                            <img src="img/light/projects/prjct-2/1.jpg" alt="background">
                            <div class="mry-bg-overlay"></div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
            
        </div>
        @yield('js')
        
        <!-- jquery js -->
        <script src="/js/plugins/jquery.min.js"></script>
        <!-- tween max js -->
        <script src="/js/plugins/tween-max.min.js"></script>
        <!-- scroll magic js -->
        <script src="/js/plugins/scroll-magic.js"></script>
        <!-- scroll magic gsap plugin js -->
        <script src="/js/plugins/scroll-magic-gsap-plugin.js"></script>
        <!-- swiper js -->
        <script src="/js/plugins/swiper.min.js"></script>
        <!-- isotope js -->
        <script src="/js/plugins/isotope.min.js"></script>
        <!-- fancybox js -->
        <script src="/js/plugins/fancybox.min.js"></script>
        <!-- mapbox js -->
        <script src="/js/plugins/mapbox.min.js"></script>
        <!-- smooth scrollbar js -->
        <script src="/js/plugins/smooth-scrollbar.min.js"></script>
        <!-- overscroll js -->
        <script src="/js/plugins/overscroll.min.js"></script>
        @if ($page == 'Habar Architects')
            <!-- canvas js -->
            <script src="/js/plugins/canvas.js"></script>
        @endif
        <!-- parsley js -->
        <script src="/js/plugins/parsley.min.js"></script>
        <!-- main js -->
        <script src="/js/main.js"></script>
    </body>
</html>
