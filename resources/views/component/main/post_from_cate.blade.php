<!-- Posts from categories -->
<section class="section mb-0">
  <div class="row">
    @foreach($post_from_cate as $value)
    <!-- Technology -->
    <div class="col-md-6">
      <div class="title-wrap title-wrap--line">
        <h3 class="section-title">{{ $value->Ten}}</h3>
      </div>
      <div class="row">
        @php
          $idLT = $value->idLT;
        @endphp
        @foreach(App\Model\Tin::where('idLT',$idLT)->inRandomOrder()->orderby('Ngay','desc')->take(1)->get() as $vl)
        <div class="col-lg-6">
          <article class="entry thumb thumb--size-2">
            @if($vl->urlHinh != null)
            <div class="entry__img-holder thumb__img-holder" style="background-image: url('{{ $vl->urlHinh}}');">
            @else
            <div class="entry__img-holder thumb__img-holder" style="background-image: url({{ asset('upload/images/Chuyển-hướng-lỗi-404-not-found-về-trang-chủ-hoặc-trang-cảnh-báo-wordpress.jpg')}});">
            @endif
              <div class="bottom-gradient"></div>
              <div class="thumb-text-holder thumb-text-holder--1">
                <h2 class="thumb-entry-title">
                  <a href="{{ route('chitiettin',['idTin'=>$vl->idTin,'TieuDe'=>Str::slug($vl->TieuDe)]) }}">{!! $vl->TieuDe !!}</a>
                </h2>
                <ul class="entry__meta">
                  <li class="entry__meta-author">
                    <span>by</span>
                    <a href="#">Nguyễn Văn Phước</a>
                  </li>
                  <li class="entry__meta-date">
                    {{ $vl->Ngay}}
                  </li>
                </ul>
              </div>
              <a href="{{ route('chitiettin',['idTin'=>$vl->idTin,'TieuDe'=>Str::slug($vl->TieuDe)]) }}" class="thumb-url"></a>
            </div>
          </article>
        </div>
        @endforeach
        <div class="col-lg-6">
          <ul class="post-list-small post-list-small--dividers post-list-small--arrows mb-24">
            @foreach(App\Model\Tin::where('idLT',$idLT)->inRandomOrder()->orderby('Ngay','desc')->take(4)->get() as $vl1)
            <li class="post-list-small__item">
              <article class="post-list-small__entry">
                <div class="post-list-small__body">
                  <h3 class="post-list-small__entry-title">
                    <a href="{{ route('chitiettin',['idTin'=>$vl1->idTin,'TieuDe'=>Str::slug($vl1->TieuDe)]) }}">{!! $vl1->TieuDe !!}</a>
                  </h3>
                </div>
              </article>
            </li>
            @endforeach
          </ul>
        </div>
      </div>
    </div> <!-- end technology -->
    @endforeach
  </div>
</section> <!-- end posts from categories -->
