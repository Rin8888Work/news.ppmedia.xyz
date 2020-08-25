<!-- Posts -->
<div class="col-lg-8 blog__content">

  <!-- Latest News -->
  <section class="section tab-post mb-16">
    <div class="title-wrap title-wrap--line">
      <h3 class="section-title">Tin Mới Nhất</h3>

      <div class="tabs tab-post__tabs">
        <ul class="tabs__list">
          <li class="tabs__item tabs__item--active">
            <a href="#tab-all" class="tabs__trigger">All</a>
          </li>
          @foreach($new as $lt)
          <li class="tabs__item tabs__item">
              @php
                $idLT =  $lt->idLT;
              @endphp
            <a  href="#tab-{{ Str::slug($lt->Ten) }}" class="tabs__trigger request_ajax">{!! $lt->Ten !!}</a>
          </li>
          @endforeach
        </ul> <!-- end tabs -->
      </div>
    </div>

    <!-- tab content -->
    <div class="tabs__content tabs__content-trigger tab-post__tabs-content">

      <div class="tabs__content-pane tabs__content-pane--active" id="tab-all">
        <div class="row card-row">
          @foreach($latest_new as $ltn)
          <div class="col-md-6">
            <article class="entry card">
              <div class="entry__img-holder card__img-holder">
                <a href="{{ route('chitiettin',['idTin'=>$ltn->idTin,'TieuDe'=>Str::slug($ltn->TieuDe)]) }}">
                  <div class="thumb-container thumb-70">
                    @if($ltn->urlHinh != null)
                    <img data-src="{{ $ltn->urlHinh}}" src="img/empty.png" class="entry__img lazyload" alt="" />
                    @else
                    <img data-src="{{ asset('upload/images/Chuyển-hướng-lỗi-404-not-found-về-trang-chủ-hoặc-trang-cảnh-báo-wordpress.jpg')}}" src="img/empty.png" class="entry__img lazyload" alt="" />
                    @endif
                  </div>
                </a>
                <a href="{{route('loaitin',['idLT'=>$ltn->loaitin->idLT,'Ten'=>Str::slug($ltn->loaitin->Ten)])}}" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">{!! $ltn->loaitin->Ten !!}</a>
              </div>

              <div class="entry__body card__body">
                <div class="entry__header">

                  <h2 class="entry__title">
                    <a href="{{ route('chitiettin',['idTin'=>$ltn->idTin,'TieuDe'=>Str::slug($ltn->TieuDe)]) }}">{!! $ltn->TieuDe !!}</a>
                  </h2>
                  <ul class="entry__meta">
                    <li class="entry__meta-author">
                      <span>by</span>
                      <a href="#">Nguyễn Văn Phước</a>
                    </li>
                    <li class="entry__meta-date">
                      {{ $ltn->Ngay}}
                    </li>
                  </ul>
                </div>
                <div class="entry__excerpt">
                  <p>{!! substr($ltn->TomTat,0,120) !!}...</p>
                </div>
              </div>
            </article>
          </div>
          @endforeach
        </div>
      </div> <!-- end pane 1 -->

      <div class="tabs__content-pane" id="tab-lifestyle">
        <div class="row card-row">
          <div class="col-md-6">
            <article class="entry card">
              <div class="entry__img-holder card__img-holder">
                <a href="single-post.html">
                  <div class="thumb-container thumb-70">
                    <img data-src="img/content/grid/grid_post_1.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                  </div>
                </a>
                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">world</a>
              </div>

              <div class="entry__body card__body">
                <div class="entry__header">

                  <h2 class="entry__title">
                    <a href="single-post.html">Follow These Smartphone Habits of Successful Entrepreneurs</a>
                  </h2>
                  <ul class="entry__meta">
                    <li class="entry__meta-author">
                      <span>by</span>
                      <a href="#">Nguyễn Văn Phước</a>
                    </li>
                    <li class="entry__meta-date">
                      Jan 21, 2018
                    </li>
                  </ul>
                </div>
                <div class="entry__excerpt">
                  <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                </div>
              </div>
            </article>
          </div>
          <div class="col-md-6">
            <article class="entry card">
              <div class="entry__img-holder card__img-holder">
                <a href="single-post.html">
                  <div class="thumb-container thumb-70">
                    <img data-src="img/content/grid/grid_post_2.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                  </div>
                </a>
                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple">fashion</a>
              </div>

              <div class="entry__body card__body">
                <div class="entry__header">

                  <h2 class="entry__title">
                    <a href="single-post.html">3 Things You Can Do to Get Your Customers Talking About Your Business</a>
                  </h2>
                  <ul class="entry__meta">
                    <li class="entry__meta-author">
                      <span>by</span>
                      <a href="#">Nguyễn Văn Phước</a>
                    </li>
                    <li class="entry__meta-date">
                      Jan 21, 2018
                    </li>
                  </ul>
                </div>
                <div class="entry__excerpt">
                  <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                </div>
              </div>
            </article>
          </div>
          <div class="col-md-6">
            <article class="entry card">
              <div class="entry__img-holder card__img-holder">
                <a href="single-post.html">
                  <div class="thumb-container thumb-70">
                    <img data-src="img/content/grid/grid_post_3.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                  </div>
                </a>
                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--orange">mining</a>
              </div>

              <div class="entry__body card__body">
                <div class="entry__header">

                  <h2 class="entry__title">
                    <a href="single-post.html">Lose These 12 Bad Habits If You're Serious About Becoming a Millionaire</a>
                  </h2>
                  <ul class="entry__meta">
                    <li class="entry__meta-author">
                      <span>by</span>
                      <a href="#">Nguyễn Văn Phước</a>
                    </li>
                    <li class="entry__meta-date">
                      Jan 21, 2018
                    </li>
                  </ul>
                </div>
                <div class="entry__excerpt">
                  <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                </div>
              </div>
            </article>
          </div>
          <div class="col-md-6">
            <article class="entry card">
              <div class="entry__img-holder card__img-holder">
                <a href="single-post.html">
                  <div class="thumb-container thumb-70">
                    <img data-src="img/content/grid/grid_post_4.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                  </div>
                </a>
                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green">lifestyle</a>
              </div>

              <div class="entry__body card__body">
                <div class="entry__header">

                  <h2 class="entry__title">
                    <a href="single-post.html">10 Horrible Habits You're Doing Right Now That Are Draining Your Energy</a>
                  </h2>
                  <ul class="entry__meta">
                    <li class="entry__meta-author">
                      <span>by</span>
                      <a href="#">Nguyễn Văn Phước</a>
                    </li>
                    <li class="entry__meta-date">
                      Jan 21, 2018
                    </li>
                  </ul>
                </div>
                <div class="entry__excerpt">
                  <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div> <!-- end pane 3 -->

      <div class="tabs__content-pane" id="tab-business">
        <div class="row card-row">
          <div class="col-md-6">
            <article class="entry card">
              <div class="entry__img-holder card__img-holder">
                <a href="single-post.html">
                  <div class="thumb-container thumb-70">
                    <img data-src="img/content/grid/grid_post_3.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                  </div>
                </a>
                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--orange">mining</a>
              </div>

              <div class="entry__body card__body">
                <div class="entry__header">

                  <h2 class="entry__title">
                    <a href="single-post.html">Lose These 12 Bad Habits If You're Serious About Becoming a Millionaire</a>
                  </h2>
                  <ul class="entry__meta">
                    <li class="entry__meta-author">
                      <span>by</span>
                      <a href="#">Nguyễn Văn Phước</a>
                    </li>
                    <li class="entry__meta-date">
                      Jan 21, 2018
                    </li>
                  </ul>
                </div>
                <div class="entry__excerpt">
                  <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                </div>
              </div>
            </article>
          </div>
          <div class="col-md-6">
            <article class="entry card">
              <div class="entry__img-holder card__img-holder">
                <a href="single-post.html">
                  <div class="thumb-container thumb-70">
                    <img data-src="img/content/grid/grid_post_4.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                  </div>
                </a>
                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green">lifestyle</a>
              </div>

              <div class="entry__body card__body">
                <div class="entry__header">

                  <h2 class="entry__title">
                    <a href="single-post.html">10 Horrible Habits You're Doing Right Now That Are Draining Your Energy</a>
                  </h2>
                  <ul class="entry__meta">
                    <li class="entry__meta-author">
                      <span>by</span>
                      <a href="#">Nguyễn Văn Phước</a>
                    </li>
                    <li class="entry__meta-date">
                      Jan 21, 2018
                    </li>
                  </ul>
                </div>
                <div class="entry__excerpt">
                  <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                </div>
              </div>
            </article>
          </div>
          <div class="col-md-6">
            <article class="entry card">
              <div class="entry__img-holder card__img-holder">
                <a href="single-post.html">
                  <div class="thumb-container thumb-70">
                    <img data-src="img/content/grid/grid_post_1.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                  </div>
                </a>
                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">world</a>
              </div>

              <div class="entry__body card__body">
                <div class="entry__header">

                  <h2 class="entry__title">
                    <a href="single-post.html">Follow These Smartphone Habits of Successful Entrepreneurs</a>
                  </h2>
                  <ul class="entry__meta">
                    <li class="entry__meta-author">
                      <span>by</span>
                      <a href="#">Nguyễn Văn Phước</a>
                    </li>
                    <li class="entry__meta-date">
                      Jan 21, 2018
                    </li>
                  </ul>
                </div>
                <div class="entry__excerpt">
                  <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                </div>
              </div>
            </article>
          </div>
          <div class="col-md-6">
            <article class="entry card">
              <div class="entry__img-holder card__img-holder">
                <a href="single-post.html">
                  <div class="thumb-container thumb-70">
                    <img data-src="img/content/grid/grid_post_2.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                  </div>
                </a>
                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple">fashion</a>
              </div>

              <div class="entry__body card__body">
                <div class="entry__header">

                  <h2 class="entry__title">
                    <a href="single-post.html">3 Things You Can Do to Get Your Customers Talking About Your Business</a>
                  </h2>
                  <ul class="entry__meta">
                    <li class="entry__meta-author">
                      <span>by</span>
                      <a href="#">Nguyễn Văn Phước</a>
                    </li>
                    <li class="entry__meta-date">
                      Jan 21, 2018
                    </li>
                  </ul>
                </div>
                <div class="entry__excerpt">
                  <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div> <!-- end pane 4 -->

      <div class="tabs__content-pane" id="tab-fashion">
        <div class="row card-row">
          <div class="col-md-6">
            <article class="entry card">
              <div class="entry__img-holder card__img-holder">
                <a href="single-post.html">
                  <div class="thumb-container thumb-70">
                    <img data-src="img/content/grid/grid_post_1.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                  </div>
                </a>
                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--violet">world</a>
              </div>

              <div class="entry__body card__body">
                <div class="entry__header">

                  <h2 class="entry__title">
                    <a href="single-post.html">Follow These Smartphone Habits of Successful Entrepreneurs</a>
                  </h2>
                  <ul class="entry__meta">
                    <li class="entry__meta-author">
                      <span>by</span>
                      <a href="#">Nguyễn Văn Phước</a>
                    </li>
                    <li class="entry__meta-date">
                      Jan 21, 2018
                    </li>
                  </ul>
                </div>
                <div class="entry__excerpt">
                  <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                </div>
              </div>
            </article>
          </div>
          <div class="col-md-6">
            <article class="entry card">
              <div class="entry__img-holder card__img-holder">
                <a href="single-post.html">
                  <div class="thumb-container thumb-70">
                    <img data-src="img/content/grid/grid_post_2.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                  </div>
                </a>
                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--purple">fashion</a>
              </div>

              <div class="entry__body card__body">
                <div class="entry__header">

                  <h2 class="entry__title">
                    <a href="single-post.html">3 Things You Can Do to Get Your Customers Talking About Your Business</a>
                  </h2>
                  <ul class="entry__meta">
                    <li class="entry__meta-author">
                      <span>by</span>
                      <a href="#">Nguyễn Văn Phước</a>
                    </li>
                    <li class="entry__meta-date">
                      Jan 21, 2018
                    </li>
                  </ul>
                </div>
                <div class="entry__excerpt">
                  <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                </div>
              </div>
            </article>
          </div>
          <div class="col-md-6">
            <article class="entry card">
              <div class="entry__img-holder card__img-holder">
                <a href="single-post.html">
                  <div class="thumb-container thumb-70">
                    <img data-src="img/content/grid/grid_post_3.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                  </div>
                </a>
                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--orange">mining</a>
              </div>

              <div class="entry__body card__body">
                <div class="entry__header">

                  <h2 class="entry__title">
                    <a href="single-post.html">Lose These 12 Bad Habits If You're Serious About Becoming a Millionaire</a>
                  </h2>
                  <ul class="entry__meta">
                    <li class="entry__meta-author">
                      <span>by</span>
                      <a href="#">Nguyễn Văn Phước</a>
                    </li>
                    <li class="entry__meta-date">
                      Jan 21, 2018
                    </li>
                  </ul>
                </div>
                <div class="entry__excerpt">
                  <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                </div>
              </div>
            </article>
          </div>
          <div class="col-md-6">
            <article class="entry card">
              <div class="entry__img-holder card__img-holder">
                <a href="single-post.html">
                  <div class="thumb-container thumb-70">
                    <img data-src="img/content/grid/grid_post_4.jpg" src="img/empty.png" class="entry__img lazyload" alt="" />
                  </div>
                </a>
                <a href="#" class="entry__meta-category entry__meta-category--label entry__meta-category--align-in-corner entry__meta-category--green">lifestyle</a>
              </div>

              <div class="entry__body card__body">
                <div class="entry__header">

                  <h2 class="entry__title">
                    <a href="single-post.html">10 Horrible Habits You're Doing Right Now That Are Draining Your Energy</a>
                  </h2>
                  <ul class="entry__meta">
                    <li class="entry__meta-author">
                      <span>by</span>
                      <a href="#">Nguyễn Văn Phước</a>
                    </li>
                    <li class="entry__meta-date">
                      Jan 21, 2018
                    </li>
                  </ul>
                </div>
                <div class="entry__excerpt">
                  <p>iPrice Group report offers insights on daily e-commerce activity in the ...</p>
                </div>
              </div>
            </article>
          </div>
        </div>
      </div> <!-- end pane 5 -->
    </div> <!-- end tab content -->
  </section> <!-- end latest news -->

</div> <!-- end posts -->
