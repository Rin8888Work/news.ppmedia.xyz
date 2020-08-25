<!DOCTYPE html>
<html lang="en">
<head>
  <title>PNEWS @yield('title')</title>
  <meta charset="utf-8">
  <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="">
  <!-- Google Fonts -->
  <link href='https://fonts.googleapis.com/css?family=Montserrat:400,600,700%7CSource+Sans+Pro:400,600,700' rel='stylesheet'>

  <!-- Css -->
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{asset('css/font-icons.css')}}" />
  <link rel="stylesheet" href="{{asset('css/style.css')}}" />
  <link rel="stylesheet" href="{{asset('css/baocao.css')}}" />

  <!-- Favicons -->
  <link rel="shortcut icon" href="{{asset('upload/images/favicon.png')}}">
  <link rel="apple-touch-icon" href="{{asset('img/apple-touch-icon.png')}}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{asset('img/apple-touch-icon-72x72.png')}}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{asset('img/apple-touch-icon-114x114.png')}}">

  <!-- Lazyload (must be placed in head in order to work) -->
  <script src="{{asset('js/lazysizes.min.js')}}"></script>

</head>

<body class="bg-light style-default style-rounded">

  <!-- Preloader -->
  <div class="loader-mask">
    <div class="loader">
      <div></div>
    </div>
  </div>

    <!-- Bg Overlay -->
    <div class="content-overlay"></div>


    <main class="main oh" id="main">

      <!-- Top Bar -->
      <div class="top-bar d-none d-lg-block">
        <div class="container">
          <div class="row">

            <!-- Top menu -->
            <div class="col-lg-6">
              <ul class="top-menu">
                <li><a href="{{ route('about')}}">Về chúng tôi</a></li>
                <li><a href="#">Quảng cáo</a></li>
                <li><a href="{{ URL::to('/contact.html')}}">Liên hệ</a></li>
                <li><a href="{{ route('new')}}">Báo cáo</a></li>
              </ul>
            </div>

            <!-- Socials -->
            <div class="col-lg-6">
              <div class="socials nav__socials socials--nobase socials--white justify-content-end">
                <a class="social social-facebook" href="https://www.facebook.com/nguyenvanphuoc.vn/" target="_blank" aria-label="facebook">
                  <i class="ui-facebook"></i>
                </a>
                <a class="social social-twitter" href="https://www.facebook.com/nguyenvanphuoc.vn/" target="_blank" aria-label="twitter">
                  <i class="ui-twitter"></i>
                </a>
                <a class="social social-google-plus" href="https://www.facebook.com/nguyenvanphuoc.vn/" target="_blank" aria-label="google">
                  <i class="ui-google"></i>
                </a>
                <a class="social social-youtube" href="https://www.facebook.com/nguyenvanphuoc.vn/" target="_blank" aria-label="youtube">
                  <i class="ui-youtube"></i>
                </a>
                <a class="social social-instagram" href="https://www.facebook.com/nguyenvanphuoc.vn/" target="_blank" aria-label="instagram">
                  <i class="ui-instagram"></i>
                </a>
              </div>
            </div>

          </div>
        </div>
      </div> <!-- end top bar -->

  @include('component.side_nav_responsive')
  @include('component.menu')
  @yield('content')

  <!-- Footer -->
  <footer class="footer footer--dark">
    <div class="container">
      <div class="footer__widgets">
        <div class="row">

          <div class="col-lg-5 col-md-6">
            <aside class="widget widget-logo">
              <a href="{{URL::to('/trang-chu')}}" class="logo">
                PNEWS
              </a>
              <p class="copyright">
                © 2020 PNEWS | Made by <a href="https://facebook.com/nguyenvanphuoc.vn" target="_blank">Nguyễn Văn Phước</a>
              </p>
              <div class="socials socials--large socials--rounded mb-24">
                <a href="https://www.facebook.com/nguyenvanphuoc.vn/" class="social social-facebook" aria-label="facebook"><i class="ui-facebook"></i></a>
                <a href="https://www.facebook.com/nguyenvanphuoc.vn/" class="social social-twitter" aria-label="twitter"><i class="ui-twitter"></i></a>
                <a href="https://www.facebook.com/nguyenvanphuoc.vn/" class="social social-google-plus" aria-label="google+"><i class="ui-google"></i></a>
                <a href="https://www.facebook.com/nguyenvanphuoc.vn/" class="social social-youtube" aria-label="youtube"><i class="ui-youtube"></i></a>
                <a href="https://www.facebook.com/nguyenvanphuoc.vn/" class="social social-instagram" aria-label="instagram"><i class="ui-instagram"></i></a>
              </div>
            </aside>
          </div>

          <div class="col-lg-2 col-md-6">
            <aside class="widget widget_nav_menu">
              <h4 class="widget-title">Liên Kết Hữu Ích</h4>
              <ul>
                <li><a href="{{route('about')}}">Về chúng tôi</a></li>
                <li><a href="{{route('new')}}">Báo Cáo</a></li>
                <li><a href="{{route('ads')}}">Quảng cáo</a></li>
                <li><a href="{{route('support')}}">Hỗ trợ</a></li>
                <li><a href="{{ URL::to('/contact.html')}}">Liên hệ</a></li>
              </ul>
            </aside>
          </div>

          <div class="col-lg-5 col-md-6">
            <aside class="widget widget_mc4wp_form_widget">
              <h4 class="widget-title">Thư Liên Hệ</h4>
              <p class="newsletter__text">
                <i class="ui-email newsletter__icon"></i>
                Theo dõi tin tức hàng ngày của chúng tôi
              </p>
              <form class="mc4wp-form" method="post">
                <div class="mc4wp-form-fields">
                  <div class="form-group">
                    <input type="email" name="EMAIL" placeholder="Email của bạn" required="">
                  </div>
                  <div class="form-group">
                    <input type="submit" class="btn btn-lg btn-color" value="Đăng kí">
                  </div>
                </div>
              </form>
            </aside>
          </div>

        </div>
      </div>
    </div> <!-- end container -->
  </footer> <!-- end footer -->

      <div id="back-to-top">
        <a href="#top" aria-label="Go to top"><i class="ui-arrow-up"></i></a>
      </div>

    </main> <!-- end main-wrapper -->

<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ed8c1253381205f"></script>
    <!-- jQuery Scripts -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/easing.min.js')}}"></script>
    <script src="{{asset('js/owl-carousel.min.js')}}"></script>
    <script src="{{asset('js/flickity.pkgd.min.js')}}"></script>
    <script src="{{asset('js/twitterFetcher_min.js')}}"></script>
    <script src="{{asset('js/jquery.newsTicker.min.js')}}"></script>
    <script src="{{asset('js/modernizr.min.js')}}"></script>
    <script src="{{asset('js/scripts.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function(){
          $('.content1').hide();
          $('#tab-1').click(function(){
            $('.content1').slideUp();
            $('.content').slideDown();
          });
          $('#tab-2').click(function(){
            $('.content').slideUp();
            $('.content1').slideDown();
          });
        });
    </script>
  </body>
  </html>
