@extends('index')
@section('content')
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
   <h1 class="page-header">Danh Sách
      <small>User</small>
   </h1>
</div>
<!-- /.col-lg-12 -->
<div id="dataTables-example_wrapper" class="dataTables_wrapper form-inline dt-bootstrap no-footer">
<div class="row">
<div class="row">
    @if(Session::has('thongbao'))
        <div class="alert alert-success">
            {{Session::get('thongbao')}}
        </div>
    @endif
   <div class="col-sm-12">
      <table class="table table-striped table-bordered table-hover dataTable no-footer" id="dataTables-example" role="grid" aria-describedby="dataTables-example_info">
      <thead>
         <tr align="center" role="row">
            <th class="sorting_asc" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-sort="ascending" aria-label="ID: activate to sort column descending" style="width: 62px;">ID</th>
            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Name: activate to sort column ascending" style="width: 145px;">email</th>
            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Price: activate to sort column ascending" style="width: 135px;">password</th>
            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending" style="width: 143px;">quyền</th>

             <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending" style="width: 111px;">Chi tiết</th>
             <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Edit: activate to sort column ascending" style="width: 85px;">Thêm</th>
            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Edit: activate to sort column ascending" style="width: 85px;">Sửa user</th>
            <th class="sorting" tabindex="0" aria-controls="dataTables-example" rowspan="1" colspan="1" aria-label="Delete: activate to sort column ascending" style="width: 112px;">Xóa</th>
            
         </tr>
      </thead>
      @foreach($user as $u)
      <tbody>
         <tr class="gradeX odd" align="center" role="row">
            <td class="sorting_1">{{$u->id}}</td>
            <td>{{$u->email}}</td>
            <td>{{$u->password}}</td>
            <td>{{$u->role}}</td>
            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('chitiet',$u->id)}}">Chi tiết</a></td>
            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('them')}}">Thêm</a></td>
            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="{{route('sua',$u->id)}}">Sửa</a></td>
            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="{{route('xoa',$u->id)}}"> Xóa</a></td>         
         </tr>
      </tbody>
      @endforeach
    </div>
    <div class="navigation">
        <div class="row">{{$user->links()}}</div>
    </div>
   <!-- /.row -->
</div>
@endsection