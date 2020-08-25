<table id="datatable1" class="table display responsive nowrap">
  <thead>
    <tr>
      <th class="wd-15p">idTL</th>
      <th class="wd-15p">Tên TL</th>
      <th class="wd-20p">Thứ tự</th>
      <th class="wd-15p">Ẩn hiện</th>
      <th class="wd-10p">Ngôn ngữ</th>
      <th class="wd-25p">Hiện menu</th>
      <th class="wd-25p">Chỉnh</th>
      <th class="wd-25p">Xóa</th>
    </tr>
  </thead>
  <tbody>
    @foreach($ds as $row)
    <tr>
      <td>{{$row->idTL}} </td>
      <td>{{$row->TenTL}}</td>
      <td>{{$row->ThuTu}}</td>
      <td>{{($row->Anhien == '1')? "Đang Hiện": "Đang Ẩn"}}</td>
      <td>{{($row->lang == 'vi')? "Tiếng Việt": "Tiếng Anh"}}</td>
      <td>{{($row->HienMenu == '1')? "hiện trên thanh menu": "Ẩn trên thanh menu"}}</td>
      <td>
      <a href="{{ route('theloai.edit',$row->idTL)}}" class="btn btn-primary">Sửa</a>
    </td>
    <td>
      <form class="" action="{{ route('theloai.destroy',$row->idTL)}}" method="post">
        {{ csrf_field()}}
        {!! method_field('delete') !!}
        <button onclick="return confirm('Bạn muốn xóa nó?')" type="submit" class="btn btn-primary">Xóa</button>
      </form>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
