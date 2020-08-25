<table id="datatable1" class="table display responsive nowrap">
  <thead>
    <tr>
      <th class="wd-15p">idLT</th>
      <th class="wd-15p">Tên LT</th>
      <th class="wd-20p">Thứ tự</th>
      <th class="wd-15p">Ẩn hiện</th>
      <th class="wd-10p">Ngôn ngữ</th>
      <th class="wd-25p">Thể Loại</th>
      <th class="wd-25p">Chỉnh</th>
      <th class="wd-25p">Xóa</th>
    </tr>
  </thead>
  <tbody>
    @foreach($ds as $row)
    <tr>
      <td>{{$row->idLT}} </td>
      <td>{{$row->Ten}}</td>
      <td>{{$row->ThuTu}}</td>
      <td>{{($row->Anhien == '1')? "Đang Hiện": "Đang Ẩn"}}</td>
      <td>{{($row->lang == 'vi')? "Tiếng Việt": "Tiếng Anh"}}</td>
      <td>{{ $row->theloai->TenTL }}</td>
      <td>
      <a href="{{ route('loaitin.edit',$row->idLT)}}" class="btn btn-primary">Sửa</a>
    </td>
    <td>
      <form class="" action="{{ route('loaitin.destroy',$row->idLT)}}" method="post">
        {{ csrf_field()}}
        {!! method_field('delete') !!}
        <button onclick="return confirm('Bạn muốn xóa nó?')" type="submit" class="btn btn-primary">Xóa</button>
      </form>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
