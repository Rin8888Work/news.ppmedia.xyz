@extends('layout')

@section('title','| Báo Cáo ASM1')
@section('content')
<style>
section,center{
  color: white !important;
}
.wr{
  font-family: "Source Sans Pro", sans-serif;
  font-smoothing: antialiased;
  position: relative;
  padding: 50px;
}
  section,tab-w3layouts{
    width: 80% !important;
    margin: 0 auto;
    background: white;
    box-shadow: 0px 0px 14px 10px white;
    opacity: 0.8;
    padding: 20px 50px ;
  }
  center{
    margin-left:  !important;
    box-shadow: 0px 0px 14px 10px white;
    opacity: 0.8;
    padding: 20px 50px ;
    border-radius: 20px;
    place-content:center;
    display: inline-block;
    background: white;
    margin: 10px 570px 50px  570px;


  }
  p{
    margin: 0;
  }
  .cha{
    width:400px !important;
    height: 500px;
    z-index: 5;
    position:relative;
    overflow:hidden;
  }
  .cha img{
    position:absolute;
    transition: all ease-in-out 10s;
    transition-property: all;
    transition-duration: 10s;
    transition-timing-function: ease-in-out;
    transition-delay: 0s;
    top:0;
    left:0;
  }
  .cha img:hover{
        top: 100%;
    transform: translateY(-100%);
    position:absolute;
  }
</style>
<div class="wr" style= "background: url({{ asset('upload/images/background.gif')}}">

<center>
  <h1>Báo cáo ASM1</h1>
  <h3 >Giảng viên: Nguyễn Văn Long</h3>
  <h3>Họ Và Tên: Nguyễn Văn Phước</h3>
  <h3>Mã SV: PS08899</h3>
  <h3>Lớp: WD14307</h3>
</center>
<article style="display:flex;margin-top:20px;margin-bottom:50px !important;width:80%;margin:0 auto">

  <div class="cha col-md-6 col-lg-6" >

    <img width="600"src="{{ asset('upload/images/cu.png')}}" alt="">
  </div>

  <div class="cha col-md-6 col-lg-6" style="margin-left:50px;">
    <img width="600"src="{{ asset('upload/images/moi.png')}}" alt="">
  </div>
</article>
<div class="col-lg-12 col-md-12 tab-w3layouts " >
  <section class="tabs">
    <input id="tab-1" type="radio" name="radio-set" class="tab-selector-1" checked="checked" />
    <label for="tab-1" class="tab-label-1">Chức Năng Đã Làm</label>

    <input id="tab-2" type="radio" name="radio-set" class="tab-selector-2" />
    <label for="tab-2" class="tab-label-2">Định Dạng Lại</label>

    <div class="clear-shadow"></div>

    <div class="content" style="display:flex;margin-top:20px">
      <div class="col-lg-4 content-1">
        <h3>Show</h3>
        <p>+ Tin nổi bật </p>
        <p>+ Tin mới nhất</p>
        <p>+ Tin mới theo loại </p>
        <p>+ Chi tiết tin </p>
        <p>+ Tin liên quan </p>
        <p>+ Tin xem nhiều </p>
      </div>
      <div class="col-lg-4 content-1">
        <h3>Chức năng theo đề</h3>
        <p>+ Sắp xếp các tin từ mới tới cũ </p>
        <p>+ Có phân trang, breadcrumb</p>
        <p>+ dùng hình mặc định khi nạp hình lỗi </p>
        <p>+ hiện ngày đăng, số lần xem, số ý kiến </p>
        <p>+ Hiện form nhập ý kiến và lưu ý kiến </p>
        <p>+ Có nút like, share facebook </p>
        <p>+ hiện tag </p>
        <p>+ Tìm kiếm </p>

      </div>
      <div class="col-md-4 content-1">
        <h3>Chức năng thêm</h3>
        <p>+ Tạo route chuẩn</p>
        <p>+ Title,breadcrumb trang thay đổi theo tin hoặc loại tin</p>
      </div>
    </div>
    <div class="content1" style="display:flex;margin-top:20px">
      <div class="col-lg-6 content-1">
        <h3>Định dạng</h3>
        <p>+ Việt hóa toàn bộ website</p>
        <p>+ Thay đổi màu ở header</p>
        <p>+ Thay đổi logo và favicon của site </p>
        <p>+ Định dạng thêm phần mạng xã hội fixed bên trái </p>
      </div>
      <div class="col-lg-6 content-1">
        <p>+ Có 2 component main dễ dàng thay đổi bố cục index</p>
      </div>
    </div>
  </section>
</div>
</div>
@stop
