@extends('admin.layoutadmin')
@section('pagetitle','Dashboard')
@section('main')
<div class="row row-sm">
  <div class="col-lg-12">
    <div class="row row-sm">
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body pd-b-0">
            <h6 class="card-body-title tx-12 tx-spacing-2 mg-b-20 tx-success">Tổng Số Thể Loại</h6>
            <h2 class="tx-lato tx-inverse">{{ $theloai }}</h2>
          </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- col-6 -->
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body pd-b-0">
            <h6 class="card-body-title tx-12 tx-spacing-2 mg-b-20 tx-danger">Tổng Số Loại Tin</h6>
            <h2 class="tx-lato tx-inverse">{{ $loaitin }}</h2>
                      </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- col-6 -->
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body pd-b-0">
            <h6 class="card-body-title tx-12 tx-spacing-2 mg-b-20 tx-success">Tổng Số Tin Tức</h6>
            <h2 class="tx-lato tx-inverse">{{ $tin }}</h2>
                      </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- col-6 -->
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body pd-b-0">
            <h6 class="card-body-title tx-12 tx-spacing-2 mg-b-20 tx-danger">Tổng Số Người Dùng</h6>
            <h2 class="tx-lato tx-inverse">{{ $user }}</h2>
                      </div><!-- card-body -->
        </div><!-- card -->
      </div><!-- col-6 -->
    </div><!-- row -->


  </div><!-- col-8 -->

</div><!-- row -->
@stop
