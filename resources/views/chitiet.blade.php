@extends('index')
@section('content')
 <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Chi tiết
                            <small>User</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="{{route('danhsach')}}" method="get">                        
                            <div style="width: 100%">
                                <div class="form-group">
                                <label>Email:</label>
                                <a>{{$chitiet->email}} </a>
                            </div>
                            
                            <div class="form-group">
                                <label>Password :</label>
                                <a> {{$chitiet->password}}</a>
                            </div>
                            <div class="form-group">
                                <label>Quyền :</label>
                                 <a>{{$chitiet->role}} </a>
                            </div>
                            <div class="form-group">
                                <label>tên người dùng :</label>
                                 <a>{{$chitiet->tennguoidung}} </a>
                            </div>
                            <div class="form-group">
                                <label>Giới tính :</label>
                                 <a> {{$chitiet->gioitinh}}</a>
                            </div>
                            <div class="form-group">
                                <label> Số điện thoại : </label>
                                 <a>{{$chitiet->sodienthoai}}</a> 
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ :</label>
                                 <a> {{$chitiet->diachi}}</a>
                            </div>
                            
                           
                            <button type="submit" class="btn btn-default btn-success" onclick="">Quay lại</button>
                            </div>
                            
                           
                        
                    </form></div>
                </div>
                <!-- /.row -->
</div>
@endsection