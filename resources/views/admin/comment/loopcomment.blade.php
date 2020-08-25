<table id="datatable1" class="table display responsive nowrap">
  <thead>
    <tr>
      <th class="wd-15p">id</th>
      <th class="wd-15p">Tin</th>
      <th class="wd-20p">Người bình luận</th>
      <th class="wd-15p">Nội Dung</th>
      <th class="wd-10p">Ngày</th>
      <th class="wd-25p">Xóa</th>
    </tr>
  </thead>
  <tbody>
    @foreach($ds as $row)
    <tr>
      <td>{{$row->idYKien}} </td>
      <td>@if(isset($row->tin->TieuDe)) {{$row->tin->TieuDe}} @else Tin đã bị xóa @endif</td>
      <td>{{$row->HoTen}}</td>
      <td>{{($row->NoiDung)}}</td>
      <td>{{($row->Ngay)}}</td>
    <td>
      <form class="" action="{{ route('comment.destroy',$row->idYKien)}}" method="post">
        {{ csrf_field()}}
        {!! method_field('delete') !!}
        <button onclick="return confirm('Bạn muốn xóa nó?')" type="submit" class="btn btn-primary">Xóa</button>
      </form>
    </td>
    </tr>
    @endforeach
  </tbody>
</table>
