<!doctype html>
<html class="no-js" lang="zxx">
    
<!-- Mirrored from wphix.com/template/topico-prev/topico/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jun 2024 12:59:36 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Topico - Clean, Minimal E-commerce HTML5 Template </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico in the root directory -->
        <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">

		<!-- CSS here -->
        <link rel="stylesheet" href="assets/css/preloader.css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/slick.css">
        <link rel="stylesheet" href="assets/css/backToTop.css">
        <link rel="stylesheet" href="assets/css/meanmenu.css">
        <link rel="stylesheet" href="assets/css/nice-select.css">
        <link rel="stylesheet" href="assets/css/magnific-popup.css">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/animate.min.css">
        <link rel="stylesheet" href="assets/css/jquery.fancybox.min.css">
        <link rel="stylesheet" href="assets/css/fontAwesome5Pro.css">
        <link rel="stylesheet" href="assets/css/ui-range-slider.css">
        <link rel="stylesheet" href="assets/css/default.css">
        <link rel="stylesheet" href="assets/css/style.css">
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

        <!-- preloader area start -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div id="object"></div>
                </div>
            </div>
        </div>
        <!-- preloader area end -->
        

        <!-- back to top start -->
        <div class="progress-wrap">
            <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
            </svg>
        </div>
        <!-- back to top end -->

        <!-- header area start -->
        <?php include_once "header.php";?>
        <!-- header area end -->

        <!-- offcanvas area start -->
        <div class="offcanvas__area">
            <div class="offcanvas__wrapper">
            <div class="offcanvas__close">
                <button class="offcanvas__close-btn" id="offcanvas__close-btn">
                    <i class="fal fa-times"></i>
                </button>
            </div>
            <div class="offcanvas__content">
                <div class="offcanvas__logo mb-40">
                    <a href="index.html">
                    <img src="assets/img/logo/logo-black.png" alt="logo">
                    </a>
                </div>
                <div class="offcanvas__search mb-25">
                    <form action="#">
                        <input type="text" placeholder="What are you searching for?">
                        <button type="submit" ><i class="far fa-search"></i></button>
                    </form>
                </div>
                <div class="mobile-menu-2 fix"></div>
                <div class="offcanvas__action">

                </div>
            </div>
            </div>
        </div>
        <!-- offcanvas area end -->      
        <div class="body-overlay"></div>
        <!-- offcanvas area end -->

        <main>
            
            <!-- breadcrumb area start -->
            <section class="breadcrumb__area box-plr-75">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="breadcrumb__wrapper">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                      <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                      <li class="breadcrumb-item active" aria-current="page">Blog</li>
                                    </ol>
                                  </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb area end -->

            <!-- blog area start -->
            <section class="blog__area box-plr-75 pb-70">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xxl-2 col-xl-3 col-lg-3">
                            <div class="sidebar__widget">
                                <div class="sidebar__widget-item mb-35">
                                    <div class="sidebar__search">
                                        <form action="#">
                                            <input type="text" placeholder="Search posts here">
                                            <button type="submit"><i class="far fa-search"></i></button>
                                        </form>
                                    </div>
                                </div>
                                <div class="sidebar__widget-item mb-35">
                                    <h3 class="sidebar__widget-title mb-10">Categories</h3>
                                    <div class="sidebar__categories">
                                        <ul>
                                            <li><a href="#">Videos</a></li>
                                            <li><a href="#">Uncategorized </a></li>
                                            <li><a href="#">Travel </a></li>
                                            <li><a href="#">Music </a></li>
                                            <li><a href="#">Photography </a></li>
                                            <li><a href="#">Images </a></li>
                                            <li><a href="#">Creative </a></li>
                                            <li><a href="#">Azone Post </a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="sidebar__widget-item mb-35">
                                    <h3 class="sidebar__widget-title mb-30">Recent</h3>
                                    <div class="sidebar__post rc__post">
                                        <ul>
                                           <li>
                                              <div class="rc__post d-flex align-items-center">
                                                 <div class="rc__post-thumb mr-20">
                                                    <a href="blog-details.html">
                                                        <img src="assets/img/blog/sidebar/blog-sm-1.jpg" alt="">
                                                    </a>
                                                 </div>
                                                 <div class="rc__post-content">
                                                    <h3 class="rc__post-title">
                                                       <a href="blog-details.html">Curabitur Lobortis News </a>
                                                    </h3>
                                                    <div class="rc__meta">
                                                       <span>July 21 2021</span>
                                                    </div>
                                                 </div>
                                              </div>
                                           </li>
                                           <li>
                                              <div class="rc__post d-flex align-items-center">
                                                 <div class="rc__post-thumb mr-20">
                                                    <a href="blog-details.html">
                                                        <img src="assets/img/blog/sidebar/blog-sm-2.jpg" alt="">
                                                    </a>
                                                 </div>
                                                 <div class="rc__post-content">
                                                    <h3 class="rc__post-title">
                                                       <a href="blog-details.html">The Brushed Steel </a>
                                                    </h3>
                                                    <div class="rc__meta">
                                                       <span>July 21, 2021</span>
                                                    </div>
                                                 </div>
                                              </div>
                                           </li>
                                           <li>
                                              <div class="rc__post d-flex align-items-start">
                                                 <div class="rc__post-thumb mr-20">
                                                    <a href="blog-details.html">
                                                        <img src="assets/img/blog/sidebar/blog-sm-3.jpg" alt="">
                                                    </a>
                                                 </div>
                                                 <div class="rc__post-content">
                                                    <h3 class="rc__post-title">
                                                       <a href="blog-details.html">Koma and Torus </a>
                                                    </h3>
                                                    <div class="rc__meta">
                                                       <span>July 21, 2021</span>
                                                    </div>
                                                 </div>
                                              </div>
                                           </li>
                                           <li>
                                              <div class="rc__post d-flex align-items-start">
                                                 <div class="rc__post-thumb mr-20">
                                                    <a href="blog-details.html">
                                                        <img src="assets/img/blog/sidebar/blog-sm-4.jpg" alt="">
                                                    </a>
                                                 </div>
                                                 <div class="rc__post-content">
                                                    <h3 class="rc__post-title">
                                                       <a href="blog-details.html"> Grip and Allows</a>
                                                    </h3>
                                                    <div class="rc__meta">
                                                       <span>July 21, 2021</span>
                                                    </div>
                                                 </div>
                                              </div>
                                           </li>
                                           <li>
                                              <div class="rc__post d-flex align-items-start">
                                                 <div class="rc__post-thumb mr-20">
                                                    <a href="blog-details.html">
                                                        <img src="assets/img/blog/sidebar/blog-sm-5.jpg" alt="">
                                                    </a>
                                                 </div>
                                                 <div class="rc__post-content">
                                                    <h3 class="rc__post-title">
                                                       <a href="blog-details.html">Pitterarum Formas  </a>
                                                    </h3>
                                                    <div class="rc__meta">
                                                       <span>July 21, 2021</span>
                                                    </div>
                                                 </div>
                                              </div>
                                           </li>
                                           <li>
                                              <div class="rc__post d-flex align-items-start">
                                                 <div class="rc__post-thumb mr-20">
                                                    <a href="blog-details.html">
                                                        <img src="assets/img/blog/sidebar/blog-sm-6.jpg" alt="">
                                                    </a>
                                                 </div>
                                                 <div class="rc__post-content">
                                                    <h3 class="rc__post-title">
                                                       <a href="blog-details.html">Shelving Burgundy  </a>
                                                    </h3>
                                                    <div class="rc__meta">
                                                       <span>July 21, 2021</span>
                                                    </div>
                                                 </div>
                                              </div>
                                           </li>
                                           <li>
                                              <div class="rc__post d-flex align-items-start">
                                                 <div class="rc__post-thumb mr-20">
                                                    <a href="blog-details.html">
                                                        <img src="assets/img/blog/sidebar/blog-sm-7.jpg" alt="">
                                                    </a>
                                                 </div>
                                                 <div class="rc__post-content">
                                                    <h3 class="rc__post-title">
                                                       <a href="blog-details.html">Anteposue Rarum Formas</a>
                                                    </h3>
                                                    <div class="rc__meta">
                                                       <span>July 21, 2021</span>
                                                    </div>
                                                 </div>
                                              </div>
                                           </li>
                                           <li>
                                              <div class="rc__post d-flex align-items-start">
                                                 <div class="rc__post-thumb mr-20">
                                                    <a href="blog-details.html">
                                                        <img src="assets/img/blog/sidebar/blog-sm-8.jpg" alt="">
                                                    </a>
                                                 </div>
                                                 <div class="rc__post-content">
                                                    <h3 class="rc__post-title">
                                                       <a href="blog-details.html">Posuerit Litterarum Formas  </a>
                                                    </h3>
                                                    <div class="rc__meta">
                                                       <span>July 21, 2021</span>
                                                    </div>
                                                 </div>
                                              </div>
                                           </li>
                                           <li>
                                              <div class="rc__post d-flex align-items-start">
                                                 <div class="rc__post-thumb mr-20">
                                                    <a href="blog-details.html">
                                                        <img src="assets/img/blog/sidebar/blog-sm-9.jpg" alt="">
                                                    </a>
                                                 </div>
                                                 <div class="rc__post-content">
                                                    <h3 class="rc__post-title">
                                                       <a href="blog-details.html">Anteposuerit Litterarum Formas  </a>
                                                    </h3>
                                                    <div class="rc__meta">
                                                       <span>July 21, 2021</span>
                                                    </div>
                                                 </div>
                                              </div>
                                           </li>
                                           <li>
                                              <div class="rc__post d-flex align-items-start">
                                                 <div class="rc__post-thumb mr-20">
                                                    <a href="blog-details.html">
                                                        <img src="assets/img/blog/sidebar/blog-sm-10.jpg" alt="">
                                                    </a>
                                                 </div>
                                                 <div class="rc__post-content">
                                                    <h3 class="rc__post-title">
                                                       <a href="blog-details.html">Curabitur Lobortis  </a>
                                                    </h3>
                                                    <div class="rc__meta">
                                                       <span>July 21, 2021</span>
                                                    </div>
                                                 </div>
                                              </div>
                                           </li>
                                        </ul>
                                     </div>
                                </div>
                                <div class="sidebar__widget-item">
                                    <h3 class="sidebar__widget-title">Archive </h3>
                                    <div class="sidebar__archive">
                                        <ul>
                                            <li>
                                                <a href="blog.html">April 2021 </a>
                                            </li>
                                            <li>
                                                <a href="blog.html">January 2021 </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-10 col-xl-9 col-lg-9 order-first order-lg-last">
                            <div class="row">
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <article class="postbox__item format-image mb-50 transition-3">
                                        <div class="postbox__thumb w-img">
                                           <a href="blog-details.html">
                                              <img src="assets/img/blog/blog-big-1.jpg" alt="">
                                           </a>
                                        </div>
                                        <div class="postbox__content">
                                           <h3 class="postbox__title">
                                              <a href="blog-details.html">Curabitur Lobortis News</a>
                                           </h3>
                                            <div class="postbox__meta">
                                                <p>Post Date: <span>July 21, 2021 </span></p>
                                                
                                            </div>
                                           <div class="postbox__text">
                                              <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. Praesent pretium tellus in tortor viverra condimentum. Nullam dignissim facilisis nisl, accumsan placerat justo ultricies vel. </p>
                                           </div>
                                           <div class="postbox__bottom d-flex justify-content-between align-items-center">
                                               <div class="postbox__more">
                                                   <a href="blog-details.html" class="t-y-btn t-y-btn-grey">read more</a>
                                               </div>
                                               <div class="postbox__tag">
                                                   <p> Categories: <a href="blog.html">Cooking</a></p>
                                               </div>
                                           </div>
                                        </div>
                                     </article>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <article class="postbox__item format-image mb-50 transition-3">
                                        <div class="postbox__thumb w-img">
                                           <a href="blog-details.html">
                                              <img src="assets/img/blog/blog-big-2.jpg" alt="">
                                           </a>
                                        </div>
                                        <div class="postbox__content">
                                           <h3 class="postbox__title">
                                              <a href="blog-details.html">The Brushed Steel</a>
                                           </h3>
                                            <div class="postbox__meta">
                                                <p>Post Date: <span>July 21, 2021 </span></p>
                                                
                                            </div>
                                           <div class="postbox__text">
                                              <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. Praesent pretium tellus in tortor viverra condimentum. Nullam dignissim facilisis nisl, accumsan placerat justo ultricies vel. </p>
                                           </div>
                                           <div class="postbox__bottom d-flex justify-content-between align-items-center">
                                               <div class="postbox__more">
                                                   <a href="blog-details.html" class="t-y-btn t-y-btn-grey">read more</a>
                                               </div>
                                               <div class="postbox__tag">
                                                   <p> Categories: <a href="blog.html">Travel</a></p>
                                               </div>
                                           </div>
                                        </div>
                                     </article>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <article class="postbox__item format-image mb-50 transition-3">
                                        <div class="postbox__thumb w-img">
                                           <a href="blog-details.html">
                                              <img src="assets/img/blog/blog-big-3.jpg" alt="">
                                           </a>
                                        </div>
                                        <div class="postbox__content">
                                           <h3 class="postbox__title">
                                              <a href="blog-details.html">Koma and Torus</a>
                                           </h3>
                                            <div class="postbox__meta">
                                                <p>Post Date: <span>July 21, 2021 </span></p>
                                                
                                            </div>
                                           <div class="postbox__text">
                                              <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. Praesent pretium tellus in tortor viverra condimentum. Nullam dignissim facilisis nisl, accumsan placerat justo ultricies vel. </p>
                                           </div>
                                           <div class="postbox__bottom d-flex justify-content-between align-items-center">
                                               <div class="postbox__more">
                                                   <a href="blog-details.html" class="t-y-btn t-y-btn-grey">read more</a>
                                               </div>
                                               <div class="postbox__tag">
                                                   <p> Categories: <a href="blog.html">Travel</a></p>
                                               </div>
                                           </div>
                                        </div>
                                     </article>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <article class="postbox__item format-image mb-50 transition-3">
                                        <div class="postbox__thumb w-img">
                                           <a href="blog-details.html">
                                              <img src="assets/img/blog/blog-big-4.jpg" alt="">
                                           </a>
                                        </div>
                                        <div class="postbox__content">
                                           <h3 class="postbox__title">
                                              <a href="blog-details.html">Grip and Allows</a>
                                           </h3>
                                            <div class="postbox__meta">
                                                <p>Post Date: <span>July 21, 2021 </span></p>
                                                
                                            </div>
                                           <div class="postbox__text">
                                              <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. Praesent pretium tellus in tortor viverra condimentum. Nullam dignissim facilisis nisl, accumsan placerat justo ultricies vel. </p>
                                           </div>
                                           <div class="postbox__bottom d-flex justify-content-between align-items-center">
                                               <div class="postbox__more">
                                                   <a href="blog-details.html" class="t-y-btn t-y-btn-grey">read more</a>
                                               </div>
                                               <div class="postbox__tag">
                                                   <p> Categories: <a href="blog.html">Travel</a></p>
                                               </div>
                                           </div>
                                        </div>
                                     </article>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <article class="postbox__item format-image mb-50 transition-3">
                                        <div class="postbox__thumb w-img">
                                           <a href="blog-details.html">
                                              <img src="assets/img/blog/blog-big-5.jpg" alt="">
                                           </a>
                                        </div>
                                        <div class="postbox__content">
                                           <h3 class="postbox__title">
                                              <a href="blog-details.html">Pitterarum Formas</a>
                                           </h3>
                                            <div class="postbox__meta">
                                                <p>Post Date: <span>July 21, 2021 </span></p>
                                                
                                            </div>
                                           <div class="postbox__text">
                                              <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. Praesent pretium tellus in tortor viverra condimentum. Nullam dignissim facilisis nisl, accumsan placerat justo ultricies vel. </p>
                                           </div>
                                           <div class="postbox__bottom d-flex justify-content-between align-items-center">
                                               <div class="postbox__more">
                                                   <a href="blog-details.html" class="t-y-btn t-y-btn-grey">read more</a>
                                               </div>
                                               <div class="postbox__tag">
                                                   <p> Categories: <a href="blog.html">Travel</a></p>
                                               </div>
                                           </div>
                                        </div>
                                     </article>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <article class="postbox__item format-image mb-50 transition-3">
                                        <div class="postbox__thumb w-img">
                                           <a href="blog-details.html">
                                              <img src="assets/img/blog/blog-big-6.jpg" alt="">
                                           </a>
                                        </div>
                                        <div class="postbox__content">
                                           <h3 class="postbox__title">
                                              <a href="blog-details.html">Shelving Burgundy</a>
                                           </h3>
                                            <div class="postbox__meta">
                                                <p>Post Date: <span>July 21, 2021 </span></p>
                                                
                                            </div>
                                           <div class="postbox__text">
                                              <p>Suspendisse turpis ipsum, tempus in nulla eu, posuere pharetra nibh. In dignissim vitae lorem non mollis. Praesent pretium tellus in tortor viverra condimentum. Nullam dignissim facilisis nisl, accumsan placerat justo ultricies vel. </p>
                                           </div>
                                           <div class="postbox__bottom d-flex justify-content-between align-items-center">
                                               <div class="postbox__more">
                                                   <a href="blog-details.html" class="t-y-btn t-y-btn-grey">read more</a>
                                               </div>
                                               <div class="postbox__tag">
                                                   <p> Categories: <a href="blog.html">Travel</a></p>
                                               </div>
                                           </div>
                                        </div>
                                     </article>
                                </div>
                                <div class="col-xxl-12">
                                    <div class="basic-pagination basic-pagination-border pt-30 pb-30">
                                        <nav>
                                           <ul>
                                              <li>
                                                 <a href="blog.html">
                                                    <i class="fal fa-chevron-double-left"></i>
                                                 </a>
                                              </li>
                                              <li>
                                                 <a href="blog.html">1</a>
                                              </li>
                                              <li>
                                                 <a href="blog.html" class="active">2</a>
                                              </li>
                                              <li>
                                                 <a href="blog.html">3</a>
                                              </li>
                                              <li>
                                                 <a href="blog.html">
                                                    <i class="fal fa-chevron-double-right"></i>
                                                 </a>
                                              </li>
                                           </ul>
                                         </nav>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- blog area end -->

            <!-- brand area start -->
            <section class="brand__area">
                <div class="container custom-container">
                    <div class="row align-items-center">
                        <div class="col-xl-12">
                        <div class="brand__slider owl-carousel">
                            <div class="brand__item">
                            <img src="assets/img/brand/brand-1.jpg" alt="">
                            </div>
                            <div class="brand__item">
                            <img src="assets/img/brand/brand-2.jpg" alt="">
                            </div>
                            <div class="brand__item">
                            <img src="assets/img/brand/brand-3.jpg" alt="">
                            </div>
                            <div class="brand__item">
                            <img src="assets/img/brand/brand-4.jpg" alt="">
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- brand area end -->
 
        </main>

        <!-- footer area start -->
        <footer>
            <div class="footer__area footer-bg-2 yellow-footer">
                <div class="footer__top pt-80 pb-40">
                    <div class="container custom-container">
                        <div class="row">
                            <div class="col-xl-6 col-lg-12">
                                <div class="footer__top-left">
                                    <div class="row">
                                        <div class="col-xl-5 col-lg-6 col-md-6 col-sm-6">
                                            <div class="footer__widget">
                                                <div class="footer__widget-title mb-45">
                                                    <div class="footer__logo">
                                                        <a href="index.html"><img src="assets/img/logo/logo-white.png" alt=""></a>
                                                    </div>
                                                </div>
                                                <div class="footer__widget-content">
                                                    <div class="footer__hotline footer__hotline-4 d-flex align-items-center mb-30">
                                                        <div class="icon mr-15">
                                                            <i class="fal fa-headset"></i>
                                                        </div>
                                                        <div class="text">
                                                            <h4>Hotline Free 24/24:</h4>
                                                            <span>(+100) 123 456 7890</span>
                                                        </div>
                                                    </div>
                                                    <div class="footer__info footer__info-4">
                                                        <ul>
                                                            <li>
                                                                <span>Add:  
                                                                    <a target="_blank" href="https://www.google.com/maps/place/Dhaka/@23.7806207,90.3492859,12z/data=!3m1!4b1!4m5!3m4!1s0x3755b8b087026b81:0x8fa563bbdd5904c2!8m2!3d23.8104753!4d90.4119873">Walls Street 68, Mahattan, New York, USA</a>
                                                                </span>
                                                            </li>
                                                            <li><span>Email: <a href="https://wphix.com/cdn-cgi/l/email-protection#2e474048416e5a464b4c5b4b5d4557004d4143"><span class="__cf_email__" data-cfemail="234a4d454c63574b4641564650485a0d404c4e">[email&#160;protected]</span></a>  </span></li>
                                                            <li><span>Fax: <a href="tel:123-456-7890">(+100) 123 456 7890</a> - <a href="tel:-100-123-456-7891">(+100) 123 456 7891</a> </span></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-7 col-lg-6 col-md-6 col-sm-6">
                                            <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                    <div class="footer__widget">
                                                        <div class="footer__widget-title footer__widget-title-4">
                                                            <h4>Information</h4>
                                                        </div>
                                                        <div class="footer__widget-content">
                                                            <div class="footer__link footer__link-4">
                                                                <ul>
                                                                    <li><a href="#"> Custom Service </a></li>
                                                                    <li><a href="#">F.A.Q.’s</a></li>
                                                                    <li><a href="#">Ordering Tracking</a></li>
                                                                    <li><a href="#"> Contacts</a></li>
                                                                    <li><a href="#">Events</a></li>
                                                                    <li><a href="#">Popular</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                                    <div class="footer__widget">
                                                        <div class="footer__widget-title footer__widget-title-4">
                                                            <h4>Our Services</h4>
                                                        </div>
                                                        <div class="footer__widget-content">
                                                            <div class="footer__link footer__link-4">
                                                                <ul>
                                                                    <li><a href="#">Sitemap</a></li>
                                                                    <li><a href="#">Privacy Policy</a></li>
                                                                    <li><a href="#">Your Account</a></li>
                                                                    <li><a href="#">Advanced Search</a></li>
                                                                    <li><a href="#">Terms & Condition</a></li>
                                                                    <li><a href="#"> Contact Us</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-12">
                                <div class="row">
                                    <div class="col-xl-7 col-lg-6 col-md-6 col-sm-6">
                                      <div class="row">
                                        <div class="col-xl-6 col-lg-6">
                                          <div class="footer__widget">
                                              <div class="footer__widget-title footer__widget-title-4">
                                                  <h4>My Account</h4>
                                              </div>
                                              <div class="footer__widget-content">
                                                  <div class="footer__link footer__link-4">
                                                      <ul>
                                                          <li><a href="#"> About us </a></li>
                                                          <li><a href="#">Delivery Information</a></li>
                                                          <li><a href="#">Privacy Policy</a></li>
                                                          <li><a href="#">Discount</a></li>
                                                          <li><a href="#">Custom Service</a></li>
                                                          <li><a href="#">Terms & Condition</a></li>
                                                      </ul>
                                                  </div>
                                              </div>
                                          </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6">
                                          <div class="footer__widget">
                                              <div class="footer__widget-title footer__widget-title-4">
                                                  <h4>Payment & Shipping</h4>
                                              </div>
                                              <div class="footer__widget-content">
                                                  <div class="footer__link footer__link-4">
                                                      <ul>
                                                          <li><a href="#">Terms Of Use</a></li>
                                                          <li><a href="#">Payment Methods</a></li>
                                                          <li><a href="#">Shipping Guide</a></li>
                                                          <li><a href="#">Locations We Ship To</a></li>
                                                          <li><a href="#">Estimated Delivery Time</a></li>
                                                          <li><a href="#">Express</a></li>
                                                      </ul>
                                                  </div>
                                              </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-xl-5 col-lg-6 col-md-6 col-sm-6">
                                      <div class="footer__widget">
                                          <div class="footer__widget-title">
                                              <h4>Sign Up For Newsletter</h4>
                                          </div>
                                          <div class="footer__widget-content">
                                              <div class="footer__subscribe">
                                                <p> <span>Join 40.00+ Subscribers</span> and get a new discount coupon on every Saturday.</p>
                                                <div class="footer__subscribe-form">
                                                  <form action="#">
                                                    <input type="email" placeholder="Your Email Address...">
                                                    <button type="submit">subscribe</button>
                                                  </form>
                                                </div>
                                              </div>
                                          </div>
                                      </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer__copyright footer__copyright-2 pt-30 pb-35 footer-bg-2">
                    <div class="container custom-container">
                        <div class="row align-items-center">
                            <div class="col-xl-6 col-lg-6">
                                <div class="footer__copyright-text footer__copyright-text-2">
                                    <p>Copyright © <a href="index.html">Topico.</a> All Rights Reserved. <a href="#">ThemePure.</a></p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6">
                                <div class="footer__payment f-right">
                                    <a href="#" class="m-img"><img src="assets/img/icon/payment.png" alt=""></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- footer area end -->

		<!-- JS here -->
        <script data-cfasync="false" src="../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
        <script src="assets/js/vendor/waypoints.min.js"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="assets/js/meanmenu.js"></script>
        <script src="assets/js/slick.min.js"></script>
        <script src="assets/js/backToTop.js"></script>
        <script src="assets/js/jquery.fancybox.min.js"></script>
        <script src="assets/js/countdown.js"></script>
        <script src="assets/js/nice-select.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/magnific-popup.min.js"></script>
        <script src="assets/js/jquery-ui-slider-range.js"></script>
        <script src="assets/js/ajax-form.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/main.js"></script>
    </body>

<!-- Mirrored from wphix.com/template/topico-prev/topico/blog.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jun 2024 12:59:41 GMT -->
</html>
