<!-- Posts -->
<div class="col-lg-8 blog__content mb-72">

  <!-- Worldwide News -->
  <section class="section">
    <div class="title-wrap title-wrap--line">
      <h3 class="section-title">Tất Cả Tin</h3>
    </div>
    @foreach($tinall as $all)
    <article class="entry card post-list">
      @if($all->urlHinh != null)
      <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url({{ asset($all->urlHinh)}}) !important">
        @else
        <div class="entry__img-holder post-list__img-holder card__img-holder" style="background-image: url({{ asset('upload/images/Chuyển-hướng-lỗi-404-not-found-về-trang-chủ-hoặc-trang-cảnh-báo-wordpress.jpg')}}) !important">
        @endif
        <a href="{{ route('chitiettin',['idTin'=>$all->idTin,'TieuDe'=>Str::slug($all->TieuDe)]) }}" class="thumb-url"></a>
        @if($all->urlHinh != null)
        <img src="{{ asset($all->urlHinh)}}" alt="" class="entry__img d-none">
        @else
        <img src="{{ asset('upload/images/Chuyển-hướng-lỗi-404-not-found-về-trang-chủ-hoặc-trang-cảnh-báo-wordpress.jpg')}}" alt="" class="entry__img d-none">
        @endif
        <a href="{{route('loaitin',['idLT'=>$all->loaitin->idLT,'Ten'=>Str::slug($all->loaitin->Ten)])}}" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--blue">{{ $all->loaitin->Ten}}</a>
      </div>

      <div class="entry__body post-list__body card__body">
        <div class="entry__header">
          <h2 class="entry__title">
            <a href="{{ route('chitiettin',['idTin'=>$all->idTin,'TieuDe'=>Str::slug($all->TieuDe)]) }}">{{ $all->TieuDe}}</a>
          </h2>
          <ul class="entry__meta">
            <li class="entry__meta-author">
              <span>by</span>
              <a href="#">Nguyễn Văn Phước</a>
            </li>
            <li class="entry__meta-date">
              {{ $all->Ngay}}
            </li>
          </ul>
        </div>
        <div class="entry__excerpt">
          <p>{{ substr($all->TomTat,0,120)}}...</p>
        </div>
      </div>
    </article>
    @endforeach
  </section> <!-- end worldwide news -->

{{ $tinall->links() }}

</div> <!-- end posts -->
