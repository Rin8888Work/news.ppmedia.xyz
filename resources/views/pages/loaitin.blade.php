@extends('layout')
@section('title','| '.$loaitin->Ten)
@section('content')

  <!-- Breadcrumbs -->
  <div class="container">
    <ul class="breadcrumbs">
      <li class="breadcrumbs__item">
        <a href="{{URL::to('/')}}" class="breadcrumbs__url">Home</a>
      </li>
      <li class="breadcrumbs__item">
        <a href="#" class="breadcrumbs__url">News</a>
      </li>
      <li class="breadcrumbs__item breadcrumbs__item--current">
        {{$loaitin->Ten}}
      </li>
    </ul>
  </div>


  <div class="main-container container" id="main-container">

    <!-- Content -->
    <div class="row">

      <!-- Posts -->
      <div class="col-lg-8 blog__content mb-72">
        <h1 class="page-title">{{$loaitin->Ten}}</h1>

        <div class="row card-row">
          @foreach($tin as $t)
          <div class="col-md-6">
            <article class="entry card">
              <div class="entry__img-holder card__img-holder">
                <a href="{{ route('chitiettin',['idTin'=>$t->idTin,'TieuDe'=>Str::slug($t->TieuDe)]) }}">
                  <div class="thumb-container thumb-70">
                    @if($t->urlHinh != null)
                    <img data-src="{{asset($t->urlHinh) }}" src="img/empty.png" class="entry__img lazyload" alt="" />
                    @else
                    <img data-src="{{ asset('upload/images/Chuyển-hướng-lỗi-404-not-found-về-trang-chủ-hoặc-trang-cảnh-báo-wordpress.jpg')}}" src="img/empty.png" class="entry__img lazyload" alt="" />
                    @endif
                  </div>
                </a>
                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">{{ $t->loaitin->Ten }}</a>
              </div>

              <div class="entry__body card__body">
                <div class="entry__header">

                  <h2 class="entry__title">
                    <a href="{{ route('chitiettin',['idTin'=>$t->idTin,'TieuDe'=>Str::slug($t->TieuDe)]) }}">{{ $t->TieuDe}}</a>
                  </h2>
                  <ul class="entry__meta">
                    <li class="entry__meta-author">
                      <span>by</span>
                      <a href="#">Nguyễn Văn Phước</a>
                    </li>
                    <li class="entry__meta-date">
                      {{ $t->Ngay}}
                    </li>
                  </ul>
                </div>
                <div class="entry__excerpt">
                  <p>{{ substr($t->TomTat,0,150) }}...</p>
                </div>
              </div>
            </article>
          </div>
          @endforeach
        </div>

        <!-- Pagination -->
        {{ $tin->links() }}
        <div class="clear"></div>
      </div> <!-- end posts -->

      <!-- Sidebar -->
      <aside class="col-lg-4 sidebar sidebar--right">

        <!-- Widget Popular Posts -->
        <aside class="widget widget-popular-posts">
          <h4 class="widget-title">Tin Xem Nhiều</h4>
          <ul class="post-list-small">
            @foreach($tinxemnhieu as $txn)
            <li class="post-list-small__item">
              <article class="post-list-small__entry clearfix">
                <div class="post-list-small__img-holder">
                  <div class="thumb-container thumb-100">
                    <a href="{{ route('chitiettin',['idTin'=>$txn->idTin,'TieuDe'=>Str::slug($txn->TieuDe)]) }}">
                      @if($txn->urlHinh != null)
                      <img data-src="{{ asset($txn->urlHinh)}}" src="img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
                      @else
                      <img data-src="{{ asset('upload/images/Chuyển-hướng-lỗi-404-not-found-về-trang-chủ-hoặc-trang-cảnh-báo-wordpress.jpg')}}" src="img/empty.png" alt="" class="post-list-small__img--rounded lazyload">
                      @endif
                    </a>
                  </div>
                </div>
                <div class="post-list-small__body">
                  <h3 class="post-list-small__entry-title">
                    <a href="{{ route('chitiettin',['idTin'=>$txn->idTin,'TieuDe'=>Str::slug($txn->TieuDe)]) }}">{!! $txn->TieuDe !!}</a>
                  </h3>
                  <ul class="entry__meta">
                    <li class="entry__meta-author">
                      <span>by</span>
                      <a href="#">Nguyễn Văn Phước</a>
                    </li>
                    <li class="entry__meta-date">
                      {{ $txn->Ngay}}
                    </li>
                  </ul>
                </div>
              </article>
            </li>
            @endforeach
          </ul>
        </aside> <!-- end widget popular posts -->

        <!-- Widget Newsletter -->
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
        </aside> <!-- end widget newsletter -->

        <!-- Widget Socials -->
        <aside class="widget widget-socials">
          <h4 class="widget-title">Hãy Theo Dõi Chúng Tôi</h4>
          <div class="socials socials--wide socials--large">
            <div class="row row-16">
              <div class="col">
                <a class="social social-facebook" href="https://www.facebook.com/nguyenvanphuoc.vn/" title="facebook" target="_blank" aria-label="facebook">
                  <i class="ui-facebook"></i>
                  <span class="social__text">Facebook</span>
                </a><!--
                --><a class="social social-twitter" href="https://www.facebook.com/nguyenvanphuoc.vn/" title="twitter" target="_blank" aria-label="twitter">
                  <i class="ui-twitter"></i>
                  <span class="social__text">Twitter</span>
                </a><!--
                --><a class="social social-youtube" href="https://www.facebook.com/nguyenvanphuoc.vn/" title="youtube" target="_blank" aria-label="youtube">
                  <i class="ui-youtube"></i>
                  <span class="social__text">Youtube</span>
                </a>
              </div>
              <div class="col">
                <a class="social social-google-plus" href="https://www.facebook.com/nguyenvanphuoc.vn/" title="google" target="_blank" aria-label="google">
                  <i class="ui-google"></i>
                  <span class="social__text">Google+</span>
                </a><!--
                --><a class="social social-instagram" href="https://www.facebook.com/nguyenvanphuoc.vn/" title="instagram" target="_blank" aria-label="instagram">
                  <i class="ui-instagram"></i>
                  <span class="social__text">Instagram</span>
                </a><!--
                --><a class="social social-rss" href="#" title="rss" target="_blank" aria-label="rss">
                  <i class="ui-rss"></i>
                  <span class="social__text">Rss</span>
                </a>
              </div>
            </div>
          </div>
        </aside> <!-- end widget socials -->

      </aside> <!-- end sidebar -->

    </div> <!-- end content -->
  </div> <!-- end main container -->
@endsection
