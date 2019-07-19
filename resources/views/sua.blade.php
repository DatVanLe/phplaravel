@extends('index')
@section('content')
 <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Chi tiết
                            <small>User</small>
                        </h1>
                    </div>
                    @if(Session::has('thongbao'))
                    <div class="alert alert-success">
                        {{Session::get('thongbao')}}
                    </div>
                    @endif

                   
                    @if(count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{$err}}
                                <br>
                            @endforeach
                        </div>
                    @endif
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="{{route('sua',$sua->id)}}" method="post">     
                        <input type="hidden" name="_token" value="{{csrf_token()}}">                   
                            <div style="width: 100%">
                                <div class="form-group">
                                <label>Email:</label>
                                <input class="form-control" name="email" value="{{$sua->email}}">
                            </div>
                            
                            <div class="form-group">
                                <label>Password :</label>
                                <input class="form-control" name="password" value="{{$sua->password}}">
                            </div>
                            <div class="form-group">
                                <label>Quyền</label>
                                <select class="form-control" name="quyen">
                                    @if($sua->role == "Admin")
                                    <option value="Admin">Admin</option>
                                    <option value="User">User</option>
                                    @else 
                                    <option value="User">User</option>
                                    <option value="Admin">Admin</option>
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label>tên người dùng :</label>
                                <input class="form-control" name="tennguoidung" value="{{$sua->tennguoidung}}">
                            </div>
                            <div class="form-group">
                                <label>Giới tính</label>
                                <select class="form-control" name="gioitinh">
                                    @if($sua->gioitinh == "Nam")
                                    <option value="Nam">Nam</option>
                                    <option value="Nữ">Nữ</option>
                                    @else 
                                    <option value="Nữ">Nữ</option>
                                    <option value="Nam">Nam</option>
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label> Số điện thoại : </label>
                                <input class="form-control" name="sodienthoai" value="{{$sua->sodienthoai}}">
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ :</label>
                                <input class="form-control" name="diachi" value="{{$sua->diachi}}">
                            </div>
                            <button type="submit" class="btn btn-default btn-success" onclick="" style="margin-left:250px;">Cập nhật</button>
                            </div>
                            
                           
                        
                    </form></div>
                </div>
                <!-- /.row -->
</div>
@endsection