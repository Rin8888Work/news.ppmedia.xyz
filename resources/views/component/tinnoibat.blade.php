<!-- Trending Now -->
<div class="container">
  <div class="trending-now">
    <span class="trending-now__label">
      <i class="ui-flash"></i>
      <span class="trending-now__text d-lg-inline-block d-none">Tin nóng</span>
    </span>
    <div class="newsticker">
      <ul class="newsticker__list">
        @foreach($tinnong as $tn)
        <li class="newsticker__item"><a href="{{ route('chitiettin',['idTin'=>$tn->idTin,'TieuDe'=>Str::slug($tn->TieuDe)]) }}" class="newsticker__item-url">{{ $tn->TieuDe }}</a></li>
        @endforeach
      </ul>
    </div>
    <div class="newsticker-buttons">
      <button class="newsticker-button newsticker-button--prev" id="newsticker-button--prev" aria-label="next article"><i class="ui-arrow-left"></i></button>
      <button class="newsticker-button newsticker-button--next" id="newsticker-button--next" aria-label="previous article"><i class="ui-arrow-right"></i></button>
    </div>
  </div>
</div>

<!-- Featured Posts Grid -->
<section class="featured-posts-grid">
  <div class="container">
    <div class="row row-8">

      <div class="col-lg-6">
        @foreach($tinnoibat as $tnb)
        <!-- Small post -->
        <div class="featured-posts-grid__item featured-posts-grid__item--sm">
          <article class="entry card post-list featured-posts-grid__entry">
            <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url({{ $tnb->urlHinh}})">
              <a href="{{ route('chitiettin',['idTin'=>$tnb->idTin,'TieuDe'=>Str::slug($tnb->TieuDe)]) }}" class="thumb-url"></a>
              <img src="{{ $tnb->urlHinh}}" alt="" class="entry__img d-none">
              <a href="{{route('loaitin',['idLT' => $tnb->idLT, 'Ten' => Str::slug($tnb->loaitin->Ten)])}}" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">{{ $tnb->loaitin->Ten}}</a>
            </div>

            <div class="entry__body post-list__body card__body">
              <h2 class="entry__title">
                <a href="{{ route('chitiettin',['idTin'=>$tnb->idTin,'TieuDe'=>Str::slug($tnb->TieuDe)]) }}">{{ $tnb->TieuDe}}</a>
              </h2>
              <ul class="entry__meta">
                <li class="entry__meta-author">
                  <span>by</span>
                  <a href="#">Nguyễn Văn Phước</a>
                </li>
                <li class="entry__meta-date">
                  {{ $tnb->Ngay}}
                </li>
              </ul>
              <p class="entry__title">
              {{ substr($tnb->TomTat,0,120)}}...
              </p>
            </div>
          </article>
        </div> <!-- end post -->
        @endforeach
      </div> <!-- end col -->

      <div class="col-lg-6">

        <!-- Large post -->
        <div class="featured-posts-grid__item featured-posts-grid__item--lg">
          <article class="entry card featured-posts-grid__entry">
            <div class="entry__img-holder card__img-holder">
              <a href="{{ route('chitiettin',['idTin'=>$tinnoibat1->idTin,'TieuDe'=>Str::slug($tinnoibat1->TieuDe)]) }}">
                <img src="{{ $tinnoibat1->urlHinh}}" alt="" class="entry__img_a">
              </a>
              <a href="{{route('loaitin',['idLT' => $tinnoibat1->idTL, 'Ten' => Str::slug($tinnoibat1->loaitin->Ten)])}}" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green">{{ $tinnoibat1->loaitin->Ten}}</a>
            </div>

            <div class="entry__body card__body">
              <h2 class="entry__title">
                <a href="{{ route('chitiettin',['idTin'=>$tinnoibat1->idTin,'TieuDe'=>Str::slug($tinnoibat1->TieuDe)]) }}">{{ $tinnoibat1->TieuDe}}</a>
              </h2>
              <ul class="entry__meta">
                <li class="entry__meta-author">
                  <span>by</span>
                  <a href="">Nguyễn Văn Phước</a>
                </li>
                <li class="entry__meta-date">
                  {{ $tinnoibat1->Ngay}}
                </li>
              </ul>
              <p class="entry__title">
              {{ substr($tinnoibat1->TomTat,0,120)}}...
              </p>
            </div>
          </article>
        </div> <!-- end large post -->
      </div>

    </div>
  </div>
</section> <!-- end featured posts grid -->
