<!DOCTYPE html>
<!-- saved from url=(0078)file:///C:/Users/KimAnh/Desktop/giao%20dien/Laravel%20Demo/admin/trangchu.html -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Khóa Học Lập Trình Laravel Framework 5.x Tại Khoa Phạm">
    <meta name="author" content="">
    <title>Trang Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="cssadmin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="cssadmin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="cssadmin/dist/css/sb-admin-2.css" rel="stylesheet">
 
    <!-- Custom Fonts -->
    <link href="cssadmin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="cssadmin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="cssadmin/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">



     <!-- Bootstrap Core CSS -->
    <link href="../cssadmin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../cssadmin/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../cssadmin/dist/css/sb-admin-2.css" rel="stylesheet">
 
    <!-- Custom Fonts -->
    <link href="../cssadmin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="../cssadmin/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../cssadmin/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
</head>

<body> 
            @if(Auth::check() && Auth::User()->id)
            <ul style="display: flex; float: right; list-style-type: none;padding: 10px 10px 0 0">
                <li style="display: inline-block;margin-right: 20px" class="account-register"><a href="{{route('index')}}"><i class="fa fa-key"></i> Quay về trang Chủ  </a></li>
                <li class="account-login"><a href="{{route('dangnhap')}}"><i class="fa fa-sign-in"></i> Đăng Xuất</a></li> 
            </ul> 
            @endif
    <div id="wrapper">

        <!-- Navigation -->
        <p style="font-weight: bold;text-transform: uppercase;font-size: 20px;text-align: center; padding-top: 50px">Chào mừng bạn đến với trang Admin</p>            
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button> 
            </div>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
              
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div style="padding-top: 50px" class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href=""></i> ADMIN</a>                  
                            <a href="file:///C:/Users/KimAnh/Desktop/giao%20dien/Laravel%20Demo/admin/trangchu.html#"><i class="fa fa-users fa-fw"></i> Quản lý tài khoản<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level collapse">
                                <li>
                                    <a href="{{route('danhsach')}}">Danh sách tài khoản</a>
                                </li>
                            </ul>						
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <!-- Page Content -->
        <div id="page-wrapper" style="min-height: 629px;"> 
            <!-- /.container-fluid -->
            @yield('content')


        <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

   <!-- jQuery -->
    <script src="cssadmin/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="cssadmin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="cssadmin/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="cssadmin/dist/js/sb-admin-2.js"></script>




    <script src="../cssadmin/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../cssadmin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../cssadmin/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../cssadmin/dist/js/sb-admin-2.js"></script>

    <!-- DataTables JavaScript -->
  

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>



</body></html>