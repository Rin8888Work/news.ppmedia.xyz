<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Twitter -->
    <meta name="twitter:site" content="@themepixels">
    <meta name="twitter:creator" content="@themepixels">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Katniss">
    <meta name="twitter:description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="twitter:image" content="http://themepixels.me/katniss/img/katniss-social.png">
    <link rel="shortcut icon" href="{{asset('upload/images/favicon.png')}}">

    <!-- Facebook -->
    <meta property="og:url" content="http://themepixels.me/katniss">
    <meta property="og:title" content="Bracket">
    <meta property="og:description" content="Premium Quality and Responsive UI for Dashboard.">

    <meta property="og:image" content="http://themepixels.me/katniss/img/katniss-social.png">
    <meta property="og:image:secure_url" content="http://themepixels.me/katniss/img/katniss-social.png">
    <meta property="og:image:type" content="image/png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="600">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Meta -->
    <meta name="description" content="Premium Quality and Responsive UI for Dashboard.">
    <meta name="author" content="ThemePixels">


    <title>@yield('pagetitle')</title>

    <!-- vendor css -->
    <link href="{{ asset('backend/lib/font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" />
    <link href="{{ asset('backend/lib/Ionicons/css/ionicons.css')}}" rel="stylesheet">
    <link href="{{ asset('backend/lib/perfect-scrollbar/css/perfect-scrollbar.css')}}" rel="stylesheet">
    <link href="{{ asset('backend/lib/rickshaw/rickshaw.min.css')}}" rel="stylesheet">
    <script src="{{ asset('backend/lib/jquery/jquery.js')}}"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">

    <!-- Katniss CSS -->
    <link rel="stylesheet" href="{{ asset('backend/css/katniss.css')}}">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="{{ asset('backend/lib') }}/datatables/jquery.dataTables.js"></script>
      <link href="{{ asset('backend/lib') }}/datatables/jquery.dataTables.css" rel="stylesheet">
      <script>
            $(function(){
              $('#datatable1').DataTable({
                responsive: true,
                pageLength:5,
                language: {
                  searchPlaceholder: 'Tìm kiếm...',
                  sSearch: '',
                  lengthMenu: '_MENU_ items/page',
                  paginate: {previous: " < ", next:" > " },
                  lengthMenu: "Hiện _MENU_ tin trong mỗi trang",
                  zeroRecords: "Không tìm thấy",
                  info: "Đang hiện trang _PAGE_ trong _PAGES_ trang",
                  infoEmpty: "Không có dòng nào",
                  infoFiltered: "(Lọc trong _MAX_ tin)",
                }
              });
            });

      </script>
  </head>

  <body>


    <!-- ##### SIDEBAR LOGO ##### -->
    <div class="kt-sideleft-header">
      <div class="kt-logo"><a href="{{ route('admin')}}">PNEWS</a></div>
      <div id="ktDate" class="kt-date-today"></div>
      <div class="input-group kt-input-search">
        <input type="text" class="form-control" placeholder="Tìm kiếm...">
        <span class="input-group-btn mg-0">
          <button class="btn"><i class="fa fa-search"></i></button>
        </span>
      </div><!-- input-group -->
    </div><!-- kt-sideleft-header -->

  <?=View::make('admin.menu')?>
    <!-- ##### HEAD PANEL ##### -->
    <div class="kt-headpanel">
      <div class="kt-headpanel-left">
        <a id="naviconMenu" href="" class="kt-navicon d-none d-lg-flex"><i class="icon ion-navicon-round"></i></a>
        <a id="naviconMenuMobile" href="" class="kt-navicon d-lg-none"><i class="icon ion-navicon-round"></i></a>
      </div><!-- kt-headpanel-left -->

      <div class="kt-headpanel-right">
        <div class="dropdown dropdown-notification">
          <a href="" class="nav-link pd-x-7 pos-relative" data-toggle="dropdown">
            <i class="icon ion-ios-bell-outline tx-24"></i>
            <!-- start: if statement -->
            <span class="square-8 bg-danger pos-absolute t-15 r-0 rounded-circle"></span>
            <!-- end: if statement -->
          </a>
          <div class="dropdown-menu wd-300 pd-0-force">
            <div class="dropdown-menu-header">
              <label>Thông Báo</label>
              <a href="">Đánh dấu tất cả đã đọc</a>
            </div><!-- d-flex -->

            <div class="media-list">
              <!-- loop starts here -->
              <a href="" class="media-list-link read">
                <div class="media pd-x-20 pd-y-15">
                  <img src="../img/img8.jpg" class="wd-40 rounded-circle" alt="">
                  <div class="media-body">
                    <p class="tx-13 mg-b-0"><strong class="tx-medium">Suzzeth Bungaos</strong> tagged you and 18 others in a post.</p>
                    <span class="tx-12">October 03, 2017 8:45am</span>
                  </div>
                </div><!-- media -->
              </a>
              <div class="media-list-footer">
                <a href="" class="tx-12"><i class="fa fa-angle-down mg-r-5"></i> Hiện tất cả thông báo</a>
              </div>
            </div><!-- media-list -->
          </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
        <div class="dropdown dropdown-profile">
          <a href="" class="nav-link nav-link-profile" data-toggle="dropdown">
            <img src="../img/img3.jpg" class="wd-32 rounded-circle" alt="">
            <span class="logged-name"><span class="hidden-xs-down">
            @if(isset($user->name) && $user->name != null)
            {{ $user->name }}
            @endif
        </span> <i class="fa fa-angle-down mg-l-3"></i></span>
          </a>
          <div class="dropdown-menu wd-200">
            <ul class="list-unstyled user-profile-nav">
              <li><a href=""><i class="icon ion-ios-person-outline"></i> Chỉnh sửa thông tin</a></li>
              <li><a href=""><i class="icon ion-ios-gear-outline"></i> Cài đặt</a></li>
              <li><a href="{{route('logout')}}"><i class="icon ion-power"></i> Sign Out</a></li>
            </ul>
          </div><!-- dropdown-menu -->
        </div><!-- dropdown -->
      </div><!-- kt-headpanel-right -->
    </div><!-- kt-headpanel -->
    <div class="kt-breadcrumb">
      <nav class="breadcrumb">
        <a class="breadcrumb-item" href="index.html">PNEWS</a>
        <span class="breadcrumb-item active">@yield('pagetitle')</span>
      </nav>
    </div><!-- kt-breadcrumb -->

    <!-- ##### MAIN PANEL ##### -->
    <div class="kt-mainpanel">
      <div class="kt-pagetitle">
        <h5>@yield('pagetitle')</h5>

      </div><!-- kt-pagetitle -->

      <div class="kt-pagebody">
        <div class="col-sm-12">
          @if(session()->get('success'))
            <div class="alert alert-success">
              {{ session()->get('success') }}
            </div>
          @endif
        </div>
        @yield('main')

      </div><!-- kt-pagebody -->

      <div class="kt-footer">
        <span>Design by &copy; Nguyễn Văn Phước</span>
      </div><!-- kt-footer -->
    </div><!-- kt-mainpanel -->

    <script src="{{ asset('backend/lib/popper.js/popper.js')}}"></script>
    <script src="{{ asset('backend/lib/bootstrap/bootstrap.js')}}"></script>
    <script src="{{ asset('backend/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js')}}"></script>
    <script src="{{ asset('backend/lib/moment/moment.js')}}"></script>
    <script src="{{ asset('backend/lib/d3/d3.js')}}"></script>
    <script src="{{ asset('backend/lib/rickshaw/rickshaw.min.js')}}"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyAEt_DBLTknLexNbTVwbXyq2HSf2UbRBU8"></script>
    <script src="{{ asset('backend/lib/gmaps/gmaps.js')}}"></script>
    <script src="{{ asset('backend/lib/chart.js/Chart.js')}}"></script>

    <script src="{{ asset('backend/js/katniss.js')}}"></script>
    <script src="{{ asset('backend/js/ResizeSensor.js')}}"></script>
    <script src="{{ asset('backend/js/dashboard.js')}}"></script>
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
      CKEDITOR.replace( 'summary-ckeditor', {
          filebrowserUploadUrl: "{{route('upload', ['_token' => csrf_token() ])}}",
          filebrowserUploadMethod: 'form'
      });
</script>
<script>
   $(document).ready(function(){
//ajaxsetup
     $.ajaxSetup({
       headers: {
         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
       }
     });

     $("[name='idTL']").change(function(){
       console.log('đã');
       var idTL= $(this).val();
       var diachi= "/ASM1/public/layloaitintrong1theloai/" + idTL;
       $("[name='idLT']").load( diachi);//đợi t thêm csrfToken đã xem sao thử đi :v
     });

     // changePermission
     $('.permission').change(function(){
       var idgroup = $(this).val();
       var id = $(this).parent().parent().children('td:first').text();
       $.get('chagepermission/'+ id + '/' + idgroup,function(data){
        alert('Bạn đã đổi quyền cho tài khoản ' + data + ' thành công'); 
       });
     });
   });
   function changeImg(input){
       //Nếu như tồn thuộc tính file, đồng nghĩa người dùng đã chọn file mới
       if(input.files && input.files[0]){
           var reader = new FileReader();
           //Sự kiện file đã được load vào website
           reader.onload = function(e){
               //Thay đổi đường dẫn ảnh
               $('.Hinh').attr('src',e.target.result);
           }
           reader.readAsDataURL(input.files[0]);
       }
   }
</script>
<script src="{{ asset('backend/lib') }}/jquery-ui/jquery-ui.js"></script>
<script src="{{ asset('backend/lib') }}/select2/js/select2.min.js"></script>
<script>
   $(function(){
     $('.fc-datepicker').datepicker({
       showOtherMonths: true,
       selectOtherMonths: true,
       dateFormat: 'dd/mm/yy'
     });
   })
</script>
  </body>
</html>
