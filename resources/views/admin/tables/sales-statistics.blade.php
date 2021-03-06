@extends('admin.layout.master')

@section('content')

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{route('//')}}" class="brand-link">
            <img src="{{asset('system/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
                 class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Sidebar user (optional) -->
            <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                <div class="image">
                    <img src="{{asset('system/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2"
                         alt="User Image">
                </div>
                <div class="info">
                    <a href="#" class="d-block">Alexander Pierce</a>
                </div>
            </div>

            <!-- SidebarSearch Form -->
            <div class="form-inline">
                <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                           aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                            <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Sidebar Menu -->
            <nav class="mt-2">
                <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                         with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                            <i class="nav-icon fas fa-tachometer-alt"></i>
                            <p>
                                Dashboard
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('//')}}" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Dashboard v1</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-table"></i>
                            <p>
                                Tables
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('order-management')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Order Management</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('sales-statistics')}}" class="nav-link active">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Sales Statistics</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fa-envelope"></i>
                            <p>
                                Mailbox
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('mailbox')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Inbox</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('compose')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Compose</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('read-mail')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Read</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Pages
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('members')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Members</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('add')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Create Account</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('create-products')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Create products</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('generate-discount-code')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Creat Voucher</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('delete-products')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Delete Products</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('list-voucher')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List Voucher</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('list-of-products')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>List Of Products</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon far fa-plus-square"></i>
                            <p>
                                login/logout
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('login')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        login
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                                <a href="{{route('//')}}" class="nav-link">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>
                                        logout
                                        <i class="fas fa-angle-left right"></i>
                                    </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
    </aside>
    <!-- //Main Sidebar Container -->

    <!-- //Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Report on revenue statistics for the month</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Product's name</th>
                                        <th>Warehouse location</th>
                                        <th>Product price</th>
                                        <th>Total quantity of goods in stock</th>
                                        <th>Total quantity of goods shipped</th>
                                        <th>Total quantity of goods exchanged/cancelled/maintenance</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Laptop Lenovo Gaming Legion 5 15ITH6 i7 11800H/16GB/512GB/4GB
                                            RTX3050Ti/165Hz/Win11 (82JK00FNVN)
                                        </td>
                                        <td>Ha Noi city</td>
                                        <td>38,990,000 VND</td>
                                        <td>100</td>
                                        <td>80</td>
                                        <td>9</td>
                                    </tr>
                                    <tr>
                                        <td>Laptop Lenovo Gaming Legion 5 15ITH6 i7 11800H/16GB/512GB/4GB
                                            RTX3050Ti/165Hz/Win11 (82JK00FNVN)
                                        </td>
                                        <td>Da Nang city</td>
                                        <td>38,990,000 VND</td>
                                        <td>100</td>
                                        <td>98</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>Laptop Lenovo Gaming Legion 5 15ITH6 i7 11800H/16GB/512GB/4GB
                                            RTX3050Ti/165Hz/Win11 (82JK00FNVN)
                                        </td>
                                        <td>Ho Chi Minh city</td>
                                        <td>38,990,000 VND</td>
                                        <td>100</td>
                                        <td>90</td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <td>Laptop Acer Nitro 5 Gaming AN515 57 727J i7 11800H/8GB/512GB/4GB
                                            RTX3050Ti/144Hz/Win10 (NH.QD9SV.005)
                                        </td>
                                        <td>Ha Noi city</td>
                                        <td>28,490,000 VND</td>
                                        <td>100</td>
                                        <td>40</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>Laptop Acer Nitro 5 Gaming AN515 57 727J i7 11800H/8GB/512GB/4GB
                                            RTX3050Ti/144Hz/Win10 (NH.QD9SV.005)
                                        </td>
                                        <td>Da Nang city</td>
                                        <td>28,490,000 VND</td>
                                        <td>100</td>
                                        <td>100</td>
                                        <td>0</td>
                                    </tr>
                                    <tr>
                                        <td>Laptop Acer Nitro 5 Gaming AN515 57 727J i7 11800H/8GB/512GB/4GB
                                            RTX3050Ti/144Hz/Win10 (NH.QD9SV.005)
                                        </td>
                                        <td>Ho Chi Minh city</td>
                                        <td>28,490,000 VND</td>
                                        <td>100</td>
                                        <td>99</td>
                                        <td>1</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Total quantity of products in stock</th>
                                        <th>600</th>
                                        <th>Total quantity of goods shipped</th>
                                        <th>507</th>
                                        <th>Total profit for the month</th>
                                        <th>239,573,964 VND</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>
    <!-- //Main content -->


@endsection

@push('script')
    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true, "lengthChange": false, "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endpush

