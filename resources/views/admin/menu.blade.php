<!-- ##### SIDEBAR MENU ##### -->
<div class="kt-sideleft">
  <ul class="nav kt-sideleft-menu">
    <li class="nav-item">
      <a href="{{ route('dashboard') }}" class="nav-link {{request()->segment(1) == 'dashboard'? 'active' : null }}">
        <i class="icon ion-ios-home-outline"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- nav-item -->
    <li class="nav-item">
      <a href="" class="nav-link with-sub {{request()->segment(1) == 'theloai'? 'active' : null }}">
        <i class="icon ion-ios-gear-outline"></i>
        <span>Thể Loại</span>
      </a>
      <ul class="nav-sub">
        <li class="nav-item {{request()->segment(2) == null? 'active' : null }}"><a href="{{ route('theloai.index')}}" class="nav-link">Danh sách thể loại</a></li>
        <li class="nav-item {{request()->segment(2) == 'create'? 'active' : null }}"><a href="{{ route('theloai.create')}}" class="nav-link">Thêm thể loại</a></li>
      </ul>
    </li><!-- nav-item -->
    <li class="nav-item">
      <a href="" class="nav-link with-sub {{request()->segment(1) == 'loaitin'? 'active' : null }}">
        <i class="icon ion-ios-filing-outline"></i>
        <span>Loại Tin</span>
      </a>
      <ul class="nav-sub">
        <li class="nav-item {{request()->segment(1) == null? 'active' : null }}"><a href="{{ route('loaitin.index')}}" class="nav-link">Danh sách loại tin</a></li>
        <li class="nav-item {{request()->segment(1) == 'create'? 'active' : null }}"><a href="{{ route('loaitin.create')}}" class="nav-link">Thêm loại tin</a></li>
      </ul>
    </li><!-- nav-item -->
    <li class="nav-item">
      <a href="" class="nav-link with-sub {{request()->segment(1) == 'tin'? 'active' : null }}">
        <i class="icon ion-ios-filing-outline"></i>
        <span>Tin Tức</span>
      </a>
      <ul class="nav-sub">
        <li class="nav-item {{request()->segment(1) == null? 'active' : null }}"><a href="{{ route('tin.index')}}" class="nav-link">Danh sách tin tức</a></li>
        <li class="nav-item {{request()->segment(1) == 'create'? 'active' : null }}"><a href="{{ route('tin.create')}}" class="nav-link">Thêm tin tức </a></li>
      </ul>
    </li><!-- nav-item -->
    <li class="nav-item">
      <a href="" class="nav-link with-sub {{request()->segment(1) == 'comment'? 'active' : null }}">
        <i class="icon ion-ios-filing-outline"></i>
        <span>Bình Luận</span>
      </a>
      <ul class="nav-sub">
        <li class="nav-item {{request()->segment(1) == null? 'active' : null }}"><a href="{{ route('comment.index')}}" class="nav-link">Danh sách bình luận</a></li>
      </ul>
    </li><!-- nav-item -->
    <li class="nav-item">
      <a href="" class="nav-link with-sub {{request()->segment(1) == 'user'? 'active' : null }}">
        <i class="icon ion-ios-filing-outline"></i>
        <span>Người Dùng</span>
      </a>
      <ul class="nav-sub">
        <li class="nav-item {{request()->segment(1) == null? 'active' : null }}"><a href="{{ route('user.index')}}" class="nav-link">Danh sách người dùng</a></li>
      </ul>
    </li><!-- nav-item -->
  </ul>
</div><!-- kt-sideleft -->
