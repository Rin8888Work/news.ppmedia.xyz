@extends('admin.layoutadmin')
@section('pagetitle', 'THÊM TIN')
@section('main')
@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
@endif

<form method="post" action="{{ route('tin.store') }}" enctype="multipart/form-data" >
  {{ csrf_field()}}
  <div class="d-flex ">

    <div class="col-8 mg-l-30">
      <div class="d-flex flex-column">
        <div class="form-group mg-b-20">
          <label>Tên tin: <span class="tx-danger">*</span></label>
          <input name="TieuDe" placeholder="Nhập tên tin" class="form-control" required>
        </div>
        <div class="form-group mg-b-20">
          <label>Nhập Tóm Tắt: <span class="tx-danger">*</span></label>
          <textarea name="TomTat" placeholder="Nhập tóm tắt" class="form-control" required></textarea>
        </div>
        <div class="form-group mg-b-20">
          <label>Nhập Nội Dung: <span class="tx-danger">*</span></label>
          <textarea class="form-control" id="summary-ckeditor" name="content"></textarea>
        </div>
      </div>

      <button type="submit" class="btn btn-default">LƯU DATABASE</button>
    </div>
    <div class="col-3 mg-1-30">
      <div class="form-group mg-b-20">
        <label>Ngày: <span class="tx-danger">*</span></label>
        <input name="Ngay" placeholder="Nhập ngày đăng tin" class="form-control fc-datepicker" required>
      </div>
      <div class="form-group mg-b-20">
        <label>Thumbnail:</label>
        <input type="file" name="urlHinh" class="form-control " onchange="changeImg(this)">
        <img class="Hinh" width="100%" src="" alt="">
      </div>
      <select class="form-control select2 mg-b-20" name="idTL">
        <option value="">Chọn Thể Loại</option>
        @foreach($theloai as $row)
        <option value="{{ $row->idTL}}">{{ $row->TenTL}}</option>
        @endforeach
      </select>
      <select class="form-control select2 mg-b-20" name="idLT">
        <option value="">Chọn Loại Tin</option>

      </select>
        <div class="d-flex form-group mg-b-20">
          <label class="rdiobox">
              <input name="TinNoiBat" type="radio" value="1" checked>
              <span>Nổi Bật </span>
          </label> &nbsp;
          <label class="rdiobox">
              <input name="TinNoiBat" type="radio" value="0" >
              <span>Không Nổi Bật</span>
          </label>
        </div>
        <div class="d-flex form-group mg-b-20">
          <label class="rdiobox">
              <input name="AnHien" type="radio" value="1" checked>
              <span>Hiện</span>
          </label> &nbsp;
          <label class="rdiobox">
              <input name="AnHien" type="radio" value="0" >
              <span>Ẩn</span>
          </label>
        </div>
        <div class="d-flex form-group mg-b-20">
        <label class="rdiobox">
            <input name="lang" type="radio" value="vi" checked>
            <span>Tiếng Việt </span>
        </label> &nbsp;
        <label class="rdiobox">
            <input name="lang" type="radio" value="en" >
            <span>Tiếng Anh</span>
        </label>
      </div>
      <div class="form-group mg-b-20">
        <label>Tag:</label>
        <input type="text" name="tag" class="form-control">
      </div>
    </div>
  </div>

</form>

@endsection
