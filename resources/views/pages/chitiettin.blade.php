@extends('layout')
@section('title','| '. $chitiettin->TieuDe )
@section('content')
<!-- Breadcrumbs -->
<div class="container">
  <ul class="breadcrumbs">
    <li class="breadcrumbs__item">
      <a href="index.html" class="breadcrumbs__url">Home</a>
    </li>
    <li class="breadcrumbs__item">
      <a href="index.html" class="breadcrumbs__url">News</a>
    </li>
    <li class="breadcrumbs__item breadcrumbs__item--current">
      {!! $chitiettin->TieuDe !!}
    </li>
  </ul>
</div>

<div class="main-container container" id="main-container">

  <!-- Content -->
  <div class="row">

    <!-- post content -->
    <div class="col-lg-8 blog__content mb-72">
      <div class="content-box">

        <!-- standard post -->
        <article class="entry mb-0">

          <div class="single-post__entry-header entry__header">
            <a href="{{route('loaitin',['idLT'=>$chitiettin->loaitin->idLT,'Ten'=>Str::slug($chitiettin->loaitin->Ten)])}}" class="entry__meta-category entry__meta-category--label entry__meta-category--green">{{$chitiettin->loaitin->Ten}}</a>
            <h1 class="single-post__entry-title">
              {!! $chitiettin->TieuDe !!}
            </h1>

            <div class="entry__meta-holder">
              <ul class="entry__meta">
                <li class="entry__meta-author">
                  <span>by</span>
                  <a href="#">Nguyễn Văn Phước</a>
                </li>
                <li class="entry__meta-date">
                  {{$chitiettin->Ngay}}
                </li>
              </ul>

              <ul class="entry__meta">
                <li class="entry__meta-views">
                  <i class="ui-eye"></i>
                  <span>{{$chitiettin->SoLanXem}}</span>
                </li>
                <li class="entry__meta-comments">
                  <a href="#">
                    <i class="ui-chat-empty"> </i> {{ $count_comment }}
                  </a>
                </li>
              </ul>
            </div>
          </div> <!-- end entry header -->

          <div class="entry__img-holder">
            <img src="img/content/single/single_post_featured_img.jpg" alt="" class="entry__img">
          </div>

          <div class="entry__article-wrap">



            <div class="entry__article">
              {!!$chitiettin->Content !!}

              <!-- tags -->
              <div class="entry__tags">
                <i class="ui-tags"></i>
                <span class="entry__tags-label">Tags:</span>
                @foreach($tags as $tag)
                  <a href="#" rel="tag">{{ $tag}}</a>
                @endforeach
              </div> <!-- end tags -->
            </div> <!-- end entry article -->
          </div> <!-- end entry article wrap -->
          <iframe src="https://www.facebook.com/plugins/like.php?href=http%3A%2F%2Flocalhost%2FASM1%2Fpublic%2F&width=450&layout=standard&action=like&size=small&share=true&height=35&appId=2209599002519289" width="450" height="35" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>


          <!-- Newsletter Wide -->
          <div class="newsletter-wide">
            <div class="widget widget_mc4wp_form_widget">
              <div class="newsletter-wide__container">
                <div class="newsletter-wide__text-holder">
                  <p class="newsletter-wide__text">
                    <i class="ui-email newsletter__icon"></i>
                    Theo dõi tin tức hàng ngày của chúng tôi
                  </p>
                </div>
                <div class="newsletter-wide__form">
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
                </div>
              </div>
            </div>
          </div> <!-- end newsletter wide -->

          @if($tinlienquan != null)
          <!-- Related Posts -->
          <section class="section related-posts mt-40 mb-0">
            <div class="title-wrap title-wrap--line title-wrap--pr">
              <h3 class="section-title">Tin Tức liên quan</h3>
            </div>

            <!-- Slider -->
            <div id="owl-posts-3-items" class="owl-carousel owl-theme owl-carousel--arrows-outside">
              @foreach($tinlienquan as $tlq)
              <article class="entry thumb thumb--size-1">
                <div class="entry__img-holder thumb__img-holder" style="background-image: url({{ asset($tlq->urlHinh)}});">
                  <div class="bottom-gradient"></div>
                  <div class="thumb-text-holder">
                    <h2 class="thumb-entry-title">
                      <a href="{{ route('chitiettin',['idTin'=>$tlq->idTin,'TieuDe'=>Str::slug($tlq->TieuDe)]) }}">{{ $tlq->TieuDe}}</a>
                    </h2>
                  </div>
                  <a href="{{ route('chitiettin',['idTin'=>$tlq->idTin,'TieuDe'=>Str::slug($tlq->TieuDe)]) }}" class="thumb-url"></a>
                </div>
              </article>
              @endforeach
            </div> <!-- end slider -->

          </section> <!-- end related posts -->
          @endif

        </article> <!-- end standard post -->

        <!-- Comments -->
        <div class="entry-comments">
          <div class="title-wrap title-wrap--line">
            <h3 class="section-title">{{ $count_comment }} bình luận</h3>
          </div>
          @foreach($comment as $cmt)
          <ul class="comment-list">
            <li class="comment">
              <div class="comment-body">
                <div class="comment-avatar">
                  <img alt="" src="img/content/single/comment_1.jpg">
                </div>
                <div class="comment-text">
                  <h6 class="comment-author">{{ $cmt->HoTen}}</h6>
                  <div class="comment-metadata">
                    <a href="#" class="comment-date">{{ $cmt->Ngay}}</a>
                  </div>
                  <p>{{ $cmt->NoiDung}}</p>
                  <a href="#" class="comment-reply">Trả lời</a>
                </div>
              </div>
            </li> <!-- end 1-2 comment -->

          </ul>
          @endforeach
        </div> <!-- end comments -->

        <!-- Comment Form -->
        <div id="respond" class="comment-respond">
          <div class="title-wrap">
            <h5 class="comment-respond__title section-title">Để Lại Một Bình Luận</h5>
          </div>
          <form id="form" class="comment-form" method="post" action="{{ route('comment',['idTin' => $chitiettin->idTin,'TieuDe' =>Str::slug($chitiettin->TieuDe)]) }}">
            {{ csrf_field() }}
            <p class="comment-form-comment">
              <label for="comment">Bình Luận</label>
              <textarea id="comment" name="comment" rows="5" required="required"></textarea>
            </p>

            <div class="row row-20">
              <div class="col-lg-4">
                <label for="name">Tên: *</label>
                <input name="name" id="name" type="text">
              </div>
              <div class="col-lg-4">
                <label for="comment">Email: *</label>
                <input name="email" id="email" type="email">
              </div>
              <div class="col-lg-4">
                <label for="comment">Số Điện Thoại:</label>
                <input name="website" id="website" type="text">
              </div>
            </div>

            <p class="comment-form-submit">
              <input type="submit" class="btn btn-lg btn-color btn-button" value="Đăng bình luận" id="submit-message">
            </p>

          </form>
        </div> <!-- end comment form -->

      </div> <!-- end content box -->
    </div> <!-- end post content -->

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
