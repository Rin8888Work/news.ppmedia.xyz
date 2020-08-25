@extends('admin.layoutadmin')
@section('pagetitle', 'SỬA TIN')
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
<form method="post" action="{{ route('tin.update',$row->idTin) }}" enctype="multipart/form-data" >
  {{ csrf_field()}}
  {{ method_field('patch')}}
  <div class="d-flex ">

    <div class="col-8 mg-l-30">
      <div class="d-flex flex-column">
        <div class="form-group mg-b-20">
          <label>Tên tin: <span class="tx-danger">*</span></label>
          <input name="TieuDe" value="{{ $row->TieuDe }}" class="form-control" required>
        </div>
        <div class="form-group mg-b-20">
          <label>Nhập Tóm Tắt: <span class="tx-danger">*</span></label>
          <textarea name="TomTat"  class="form-control" required>{{ $row->TomTat }}</textarea>
        </div>
        <div class="form-group mg-b-20">
          <label>Nhập Nội Dung: <span class="tx-danger">*</span></label>
          <textarea class="form-control" id="summary-ckeditor" name="content">{{ $row->Content }}</textarea>
        </div>
      </div>

      <button type="submit" class="btn btn-default">LƯU DATABASE</button>
    </div>
    <div class="col-3 mg-1-30">

      <div class="form-group mg-b-20">
        <label>Ngày: <span class="tx-danger">*</span></label>
        <input type='text' value="{{ $row->Ngay }}" name="Ngay" placeholder="Nhập ngày đăng tin" class="form-control fc-datepicker" required>
      </div>

      <div class="form-group mg-b-20">
        <label>Thumbnail:</label>
        <input type="file" name="urlHinh" class="form-control" onchange="changeImg(this)">
        <img class="Hinh"  width="100%" src="{{ asset($row->urlHinh) }}" alt="">
      </div>
      <select class="form-control select2 mg-b-20" name="idTL">
        @foreach($row->theloai->get()  as $vl)
        @if($vl->idTL == $row->idTL)
          <option value="{{ $vl->idTL}}" selected>{{ $vl->TenTL}}</option>
        @else
          <option value="{{ $vl->idTL}}">{{ $vl->TenTL}}</option>
        @endif
        @endforeach
      </select>
      <select class="form-control select2 mg-b-20" name="idLT">
        @foreach($row->loaitin->get()  as $vl)
        @if($vl->idLT == $row->idLT)
          <option value="{{ $vl->idLT}}" selected>{{ $vl->Ten}}</option>
        @else
          <option value="{{ $vl->idLT}}">{{ $vl->Ten}}</option>
        @endif
        @endforeach
        </option>

      </select>
        <div class="d-flex form-group mg-b-20">
          <label class="rdiobox">
              <input name="TinNoiBat" type="radio" value="1" @if ($row->TinNoiBat == 1)  checked @endif>
              <span>Nổi Bật </span>
          </label> &nbsp;
          <label class="rdiobox">
              <input name="TinNoiBat" type="radio" value="0" @if ($row->TinNoiBat == 0)  checked @endif>
              <span>Không Nổi Bật</span>
          </label>
        </div>
        <div class="d-flex form-group mg-b-20">
          <label class="rdiobox">
              <input name="AnHien" type="radio" value="1" @if ($row->AnHien == 1)  checked @endif>
              <span>Hiện</span>
          </label> &nbsp;
          <label class="rdiobox">
              <input name="AnHien" type="radio" value="0" @if ($row->AnHien == 0)  checked @endif>
              <span>Ẩn</span>
          </label>
        </div>
        <div class="d-flex form-group mg-b-20">
        <label class="rdiobox">
            <input name="lang" type="radio" value="vi" @if ($row->lang == 'vi')  checked @endif>
            <span>Tiếng Việt </span>
        </label> &nbsp;
        <label class="rdiobox">
            <input name="lang" type="radio" value="en" @if ($row->lang == 'en')  checked @endif>
            <span>Tiếng Anh</span>
        </label>
      </div>
      <div class="form-group mg-b-20">
        <label>Tag:</label>
        <input type="text" value="{{ $row->tags }}" name="tag" class="form-control">
      </div>
    </div>
  </div>

</form>

@endsection
