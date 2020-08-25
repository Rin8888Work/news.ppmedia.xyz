@extends('admin.layoutadmin')
@section('pagetitle', 'SỬA LOẠI TIN')
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
<form method="post" action=" {{ route('loaitin.update', $row->idLT) }}" >
  {{ csrf_field()}}
  {!! method_field('patch') !!}
  <div class="col-9 mg-l-30">
    <div class="d-flex flex-column">
      <div class="form-group mg-b-20">
        <label>Tên Loại Tin: <span class="tx-danger">*</span></label>
        <input name="TenLT"  value="{{ $row->Ten }}" class="form-control" required>
      </div>
      <div class="form-group mg-b-20">
        <label>Thứ tự:</label>
        <input type="number" name="ThuTu" value="{{ $row->ThuTu }}" class="form-control">
      </div>
    </div>
    <div class="d-flex justify-content-around">
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
            <input name="lang" type="radio" value="en" @if ($row->lang == 'en')  checked @endif >
            <span>Tiếng Anh</span>
        </label>
      </div>

    </div>
    <select class="form-control select2 mg-b-20" name="idTL">
      <option value="">Chọn Thể Loại</option>
      @foreach($row->theloai->get()  as $vl)
      @if($vl->idTL == $row->idTL)
        <option value="{{ $vl->idTL}}" selected>{{ $vl->TenTL}}</option>
      @else
        <option value="{{ $vl->idTL}}">{{ $vl->TenTL}}</option>
      @endif
      @endforeach
    </select>
    <button type="submit" class="btn btn-default">LƯU DATABASE</button>
  </div>


</form>
@endsection
