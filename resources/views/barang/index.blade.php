<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href="/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="/assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="/dist/css/style.min.css" rel="stylesheet">
    <link href="/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.css" rel="stylesheet">
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper">
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header">
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i class="ti-menu ti-close"></i></a>
                    <a class="navbar-brand" href="index.html">
                        <b class="logo-icon">
                            <img src="/assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <img src="/assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>

                        <span class="logo-text">
                             <img src="/assets/images/logo-text.png" alt="homepage" class="dark-logo" />    
                             <img src="/assets/images/logo-light-text.png" class="light-logo" alt="homepage" />
                        </span>
                    </a> 
                    <a class="topbartoggler d-block d-md-none waves-effect waves-light" href="javascript:void(0)" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i class="ti-more"></i></a>
                </div>
            
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav float-left mr-auto">
                        <li class="nav-item d-none d-md-block"><a class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)" data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                    </ul>
                    <ul class="navbar-nav float-right">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="flag-icon flag-icon-us"></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right  animated bounceInDown" aria-labelledby="navbarDropdown2">
                                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-us"></i> English</a>
                                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-fr"></i> French</a>
                                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-es"></i> Spanish</a>
                                <a class="dropdown-item" href="#"><i class="flag-icon flag-icon-de"></i> German</a>
                            </div>
                        </li>
            
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="/assets/images/users/1.jpg" alt="user" class="rounded-circle" width="31"></a>
                            <div class="dropdown-menu dropdown-menu-right user-dd animated flipInY">
                                <span class="with-arrow"><span class="bg-primary"></span></span>
                                <div class="d-flex no-block align-items-center p-15 bg-primary text-white mb-2">
                                    <div class=""><img src="/assets/images/users/1.jpg" alt="user" class="img-circle" width="60"></div>
                                    <div class="ml-2">
                                        <h4 class="mb-0">Steave Jobs</h4>
                                        <p class=" mb-0">varun@gmail.com</p>
                                    </div>
                                </div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-user mr-1 ml-1"></i> My Profile</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-wallet mr-1 ml-1"></i> My Balance</a>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-email mr-1 ml-1"></i> Inbox</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0)"><i class="ti-settings mr-1 ml-1"></i> Account Setting</a>
                                <div class="dropdown-divider"></div>
                                <form action="{{route('logout')}}" method="post" onclick="return confirm('Are you sure you want to logout ?');">
                                    @csrf
                                    <button type="submit" class="dropdown-item"> <i class= "ti-power-off mr-1 ml-1"> </i>Logout</button>
                                </form>
                                <div class="dropdown-divider"></div>  
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- User Profile-->
                        
                        <!-- User Profile-->
                        <li class="nav-small-cap"><i class="mdi mdi-dots-horizontal"></i> <span class="hide-menu"> ADMIN </span></li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="http://127.0.0.1:8000/barang" aria-expanded="false"><i class="mdi mdi-view-dashboard"></i><span class="hide-menu"> ITEM </span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="http://127.0.0.1:8000/merek" aria-expanded="false"><i class="mdi mdi-tune-vertical"></i><span class="hide-menu"> BRAND </span></a>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link waves-effect waves-dark sidebar-link" href="http://127.0.0.1:8000/distributor" aria-expanded="false"><i class="mdi mdi-content-copy"></i><span class="hide-menu"> DISTRIBUTOR </span></a>
                        </li>
                       
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>

        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Dashboard</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid"> 
                <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="form-group text-right">
                        <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#exampleModal">Add new Items</button>
                    </div>
                </div>
            </div>
        
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
        
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Silahkan Isi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          
          <div class="modal-body">
          <form action="{{ route('barang.store') }}" method="POST">
            {{csrf_field()}}

            <div class="form-group">
              <label for="barang">Items</label>
              <input name="nama_barang" type="text" class="form-control" id="barang" aria-describedby="barang" placeholder="Items" >
            </div>

            <div class="form-group">
              <label for="barang">Buy Price</label>
              <input name="harga_beli" type="text" class="form-control" aria-describedby="barang" placeholder="Buy price" >
            </div>
            
            <div class="form-group">
                <strong>Brand ID:</strong>
                <select name="kd_merek" class="form-control">
                    @foreach($merek as $m)
                    <option value="{{$m->kd_merek}}" name="kd_merek">{{$m->merek}}</option>
                    @endforeach
                </select>
            </div>
       
        
            <div class="form-group ">
                <strong>Distributor ID:</strong>
                <select name="kd_distributor" class="form-control">
                    @foreach($distributor as $d)
                    <option value="{{$d->kd_distributor}}" name="kd_distributor">{{$d->nama_distributor}}</option>
                    @endforeach
                </select>
            </div>
        
        
            <div class="form-group">
                <strong>Date of entry:</strong>
                <input type="date" name="tanggal_masuk" class="form-control" placeholder="Date of entry">
            </div>
        
        
            <div class="form-group">
                <strong>Price:</strong>
                <input type="text" name="harga_barang" class="form-control" placeholder="Price">
            </div>
       
        
            <div class="form-group">
                <strong>Stock:</strong>
                <input type="text" name="stok_barang" class="form-control" placeholder="Stock">
            </div>
        
        
            <div class="form-group">
                <strong>Item info:</strong>
                <textarea class="form-control" style="height:150px" name="keterangan" placeholder="Item info"></textarea>
            </div>
       
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary waves-effect waves-light" id="sa-success">Submit</button>
          </form>
          </div>
        </div>
      </div>
    </div>
                <table id="zero_config" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Item ID</th>
                            <th>Item</th>
                            <th>Buy price</th>
                            <th>Brand</th>
                            <th>Distributor</th>
                            <th>Date of entry</th>
                            <th>Price</th>
                            <th>Stock</th>
                            <th>Item info</th>
                            <th width="280px">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($barang as $barang)
                        <tr>
                            <td>{{ $barang->kd_barang }}</td>
                            <td>{{ $barang->nama_barang }}</td>
                            <td>{{ $barang->harga_beli }}</td>
                            <td>{{ $barang->merek()->first()->merek }}</td>
                            <td>{{ $barang->distributor()->first()->nama_distributor }}</td> 
                            <td>{{ $barang->tanggal_masuk }}</td>
                            <td>{{ $barang->harga_barang }}</td>
                            <td>{{ $barang->stok_barang }}</td>
                            <td>{{ $barang->keterangan }}</td>
                            <td>
                                <form action="{{ route('barang.destroy',$barang->kd_barang) }}" method="POST" >
                    
                                    <a class="btn btn-outline-primary" href="{{ route('barang.edit',$barang->kd_barang) }}" >Edit</a>
                
                                    @csrf
                                    @method('DELETE')
                    
                                    <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you delete ?');">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>

    
                <div class="row">
                    <!-- column -->
                    <div class="col-lg-4">
                        <div class="card bg-info text-white  card-hover">
                            <div class="card-body">
                                <h4 class="card-title">Revenue Statistics</h4>
                                <div class="d-flex align-items-center mt-4">
                                    <div class="" id="ravenue"></div>
                                    <div class="ml-auto">
                                        <h3 class="font-medium white-text mb-0">$351</h3><span class="white-text op-5">Jan 10  - Jan  20</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    <div class="col-lg-4">
                        <div class="card bg-cyan text-white  card-hover">
                            <div class="card-body">
                                <h4 class="card-title">Page Views</h4>
                                <h3 class="white-text mb-0"><i class="ti-arrow-up"></i> 6548</h3>
                            </div>
                            <div class="mt-3" id="views"></div>
                        </div>
                    </div>
                    <!-- column -->
                    <div class="col-lg-4">
                        <div class="card  card-hover">
                            <div class="card-body">
                                <h4 class="card-title">Bounce Rate</h4>
                                <div class="d-flex no-block align-items-center mt-4">
                                    <div class="">
                                        <h3 class="font-medium mb-0">56.33%</h3><span class="">Total Bounce</span></div>
                                    <div class="ml-auto">
                                        <div style="max-width:150px; height:60px;" class="mb-5">
                                            <canvas id="bouncerate"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer class="footer text-center">
                 All Rights Reserved by Xtreme admin. Designed and Developed by <a href="https://wrappixel.com">WrapPixel</a>.
            </footer>
        </div>
       
    </div>
   

    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- apps -->
    <script src="/dist/js/app.min.js"></script>
    <script src="/dist/js/app.init.js"></script>
    <script src="/dist/js/app-style-switcher.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="/assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <!--c3 charts -->
    <script src="/assets/extra-libs/c3/d3.min.js"></script>
    <script src="/assets/extra-libs/c3/c3.min.js"></script>
    <!--chartjs -->
    <script src="/assets/libs/chart.js/dist/Chart.min.js"></script>
    <script src="/dist/js/pages/dashboards/dashboard1.js"></script>
    <script src="/assets/extra-libs/DataTables/datatables.min.js"></script>
    <script src="/dist/js/pages/datatable/datatable-basic.init.js"></script>
 </body>
</html>