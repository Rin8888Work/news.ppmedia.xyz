<!-- Sidebar 1 -->
<aside class="col-lg-4 sidebar sidebar--1 sidebar--right">


  <!-- Widget Categories -->
  <aside class="widget widget_categories">
    <h4 class="widget-title">Danh Mục</h4>
    <ul>
      @foreach($loaitin as $lt)
      <li><a href="{{route('loaitin',['idLT'=>$lt->idLT,'Ten'=>Str::slug($lt->Ten)])}}">{{ $lt->Ten}} <span class="categories-count"></span></a></li>
      @endforeach
    </ul>
  </aside> <!-- end widget categories -->

  <!-- Widget Recommended (Rating) -->
  <aside class="widget widget-rating-posts">
    <h4 class="widget-title">Đề Xuất</h4>
    @foreach($tindexuat as $tdx)
    <article class="entry">
      <div class="entry__img-holder">
        <a href="{{ route('chitiettin',['idTin'=>$tdx->idTin,'TieuDe'=>Str::slug($tdx->TieuDe)]) }}">
          <div class="thumb-container thumb-60">
            @if($tdx->urlHinh != null)
            <img data-src="{{ $tdx->urlHinh}}" src="img/empty.png" class="entry__img lazyload" alt="" />
            @else
            <img data-src="{{ asset('upload/images/Chuyển-hướng-lỗi-404-not-found-về-trang-chủ-hoặc-trang-cảnh-báo-wordpress.jpg')}}" src="img/empty.png" class="entry__img lazyload" alt="" />
            @endif
          </div>
        </a>
      </div>

      <div class="entry__body">
        <div class="entry__header">

          <h2 class="entry__title">
            <a href="{{ route('chitiettin',['idTin'=>$tdx->idTin,'TieuDe'=>Str::slug($tdx->TieuDe)]) }}">{{ $tdx->TieuDe}}</a>
          </h2>
          <ul class="entry__meta">
            <li class="entry__meta-author">
              <span>by</span>
              <a href="#">Nguyễn Văn Phước</a>
            </li>
            <li class="entry__meta-date">
              {{ $tdx->Ngay}}
            </li>
          </ul>
          <ul class="entry__meta">
            <li class="entry__meta-rating">
              <i class="ui-star"></i><!--
              --><i class="ui-star"></i><!--
              --><i class="ui-star"></i><!--
              --><i class="ui-star"></i><!--
              --><i class="ui-star-empty"></i>
            </li>
          </ul>
        </div>
      </div>
    </article>
    @endforeach
  </aside> <!-- end widget recommended (rating) -->
</aside> <!-- end sidebar 1 -->
