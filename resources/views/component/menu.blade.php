<!-- Navigation -->
<header class="nav">

  <div class="nav__holder nav--sticky">
    <div class="container relative">
      <div class="flex-parent">

        <!-- Side Menu Button -->
        <button class="nav-icon-toggle" id="nav-icon-toggle" aria-label="Open side menu">
          <span class="nav-icon-toggle__box">
            <span class="nav-icon-toggle__inner"></span>
          </span>
        </button>

        <!-- Logo -->
        <a href="{{URL::to('/trang-chu.html')}}" class="logo">
          PNEWS
        </a>

        <!-- Nav-wrap -->
        <nav class="flex-child nav__wrap d-none d-lg-block">
          <ul class="nav__menu">
            <li class="{{Request::is('trang-chu.html','/')? 'active' : null }} ">
              <a href="{{URL::to('/trang-chu.html')}}" >Trang chủ</a>
            </li>
            @foreach($theloai as $tl)
              <li class=" nav__dropdown {{Request::is('news/'.$tl->idTL.'/'.Str::slug($tl->TenTL))? 'active' : null }}">
                <a href="#">{{ $tl->TenTL}}</a>
                <ul class="nav__dropdown-menu">
                  @php
                    $idTL = $tl->idTL;
                  @endphp
                  @foreach(App\Model\LoaiTin::with('theloai')
                  ->where('idTL',$idTL)->get() as $lt)
                  <li><a href="{{route('loaitin',['idLT'=>$lt->idLT,'Ten'=>Str::slug($lt->Ten)])}}">{{ $lt->Ten}}</a></li>
                  @endforeach
                </ul>
              </li>
            @endforeach

          </ul> <!-- end menu -->
        </nav> <!-- end nav-wrap -->

        <!-- Nav Right -->
        <div class="nav__right">

          <!-- Search -->
          <div class="nav__right-item nav__search">
            <a href="#" class="nav__search-trigger" id="nav__search-trigger">
              <i class="ui-search nav__search-trigger-icon"></i>
            </a>
            <div class="nav__search-box" id="nav__search-box">
              <form class="nav__search-form" method="get" action=" {{ route('search')}}">
                {{ csrf_field() }}
                <input type="text" placeholder="Tìm tiêu đề tin" name="name"class="nav__search-input" required>
                <button type="submit" class="search-button btn btn-lg btn-color btn-button">
                  <i class="ui-search nav__search-icon"></i>
                </button>
              </form>
            </div>
          </div>

        </div> <!-- end nav right -->

      </div> <!-- end flex-parent -->
    </div> <!-- end container -->

  </div>
</header> <!-- end navigation -->
