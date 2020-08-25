<div class="loading">

@if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
@endif
<table id="datatable1" class="table display responsive nowrap">
  <thead>
    <tr>
      <th class="wd-15p">id</th>
      <th class="wd-15p">Tên</th>
      <th class="wd-20p">Email</th>
      <th class="wd-15p">Địa Chỉ</th>
      <th class="wd-15p">Quyền</th>
    </tr>
  </thead>
  <tbody>
    @foreach($ds as $row)
    <tr>
      <td >{{$row->id}}</td>
      <td>{{$row->name}}</td>
      <td>{{$row->email}}</td>
      <td>{{$row->diachi}}</td>
      <td>
        <select class="permission" >
          <option value="1" @if($row->idgroup == 1) selected @endif>Admin</option>
          <option value="0" @if($row->idgroup == 0) selected @endif>Người dùng</option>
        </select>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
