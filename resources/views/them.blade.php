@extends('index')
@section('content')
<div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thêm
                            <small>người dùng</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
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
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="{{route('them')}}" method="POST">
                        	<input type="hidden" name="_token" value="{{csrf_token()}}">
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" name="email" placeholder="Nhập email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input class="form-control" name="password" placeholder="Nhập mật khẩu">
                            </div>
                            <div class="form-group">
                                <label>quyền</label>
                                <input class="form-control" name="quyen" value="User" disabled="">
                            </div>
                            <div class="form-group">
                                <label>Tên người dùng</label>
                                <input class="form-control" name="tennguoidung" placeholder="Nhập tên người dùng">
                            </div>
                            <div class="form-group">
                                <label>Giới tính</label>
                                <select class="form-control" name="gioitinh">
                                    <option value="Nam">Nam</option>
                                    <option value="Nữ">Nữ</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input class="form-control" name="sodienthoai" placeholder="Nhập số điện thoại">
                            </div>
                            <div class="form-group">
                                <label>địa chỉ</label>
                                <input class="form-control" name="diachi" placeholder="Nhập địa chỉ">
                            </div>
                            <button type="submit" class="btn btn-default" style="margin-left: 200px; color: green; background-color: yellow">Đồng ý</button>  
                    </form></div>
                </div>
@endsection