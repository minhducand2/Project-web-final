@extends('admin.layout.master')

@section('content')
    <!-- //Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="{{route('//')}}" class="brand-link">
            <img src="{{asset('system/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo"
                 class="brand-image img-circle elevation-3" style="opacity: .8">
            <span class="brand-text font-weight-light">AdminLTE 3</span>
        </a>

        <!-- Sidebar -->
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
        <!-- /.sidebar -->
    </aside>
    <!-- //Main Sidebar Container -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Inventory</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>City name</th>
                                    <th>Progress</th>
                                    <th style="width: 40px">Label</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Hanoi City Warehouse</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-danger">55%</span></td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Danang City Warehouse</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-warning" style="width: 70%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-warning">70%</span></td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Ho Chi Minh City Warehouse</td>
                                    <td>
                                        <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar bg-primary" style="width: 30%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-primary">30%</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Danang City Warehouse</h3>
                            <div class="card-tools">
                                <ul class="pagination pagination-sm float-right">
                                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-sm">
                                <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Product's name</th>
                                    <th>Progress</th>
                                    <th style="width: 40px">Label</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Macbook</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-danger">55%</span></td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Iphone 13 promax</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-warning" style="width: 70%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-warning">70%</span></td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Củ đậu</td>
                                    <td>
                                        <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar bg-primary" style="width: 30%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-primary">30%</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Hanoi City Warehouse</h3>

                            <div class="card-tools">
                                <ul class="pagination pagination-sm float-right">
                                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Product's name</th>
                                    <th>Progress</th>
                                    <th style="width: 40px">Label</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Macbook</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-danger">55%</span></td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Iphone 13 promax</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-warning" style="width: 70%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-warning">70%</span></td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Củ đậu</td>
                                    <td>
                                        <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar bg-primary" style="width: 30%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-primary">30%</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->

                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Ho Chi Minh City Warehouse</h3>
                            <div class="card-tools">
                                <ul class="pagination pagination-sm float-right">
                                    <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body p-0">
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Product's name</th>
                                    <th>Progress</th>
                                    <th style="width: 40px">Label</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1.</td>
                                    <td>Macbook</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-danger">55%</span></td>
                                </tr>
                                <tr>
                                    <td>2.</td>
                                    <td>Iphone 13 promax</td>
                                    <td>
                                        <div class="progress progress-xs">
                                            <div class="progress-bar bg-warning" style="width: 70%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-warning">70%</span></td>
                                </tr>
                                <tr>
                                    <td>3.</td>
                                    <td>Củ đậu</td>
                                    <td>
                                        <div class="progress progress-xs progress-striped active">
                                            <div class="progress-bar bg-primary" style="width: 30%"></div>
                                        </div>
                                    </td>
                                    <td><span class="badge bg-primary">30%</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Customers order in Ha Noi city</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <label>
                                        <input type="text" name="table_search" class="form-control float-right"
                                               placeholder="Search">
                                    </label>

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>User</th>
                                    <th>Payment methods</th>
                                    <th>Date</th>
                                    <th width="10%">Status</th>
                                    <th>Customer Notes</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>183</td>
                                    <td>John Doe</td>
                                    <td>Paypal</td>
                                    <td>11-7-2014</td>
                                    <td>
                                        <label for="inputStatus"></label><select id="inputStatus" class="form-control custom-select">
                                            <option selected disabled>Choose</option>
                                            <option>Pending</option>
                                            <option>Delivery in progress</option>
                                            <option>Delivered</option>
                                        </select>
                                    </td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                                <tr>
                                    <td>219</td>
                                    <td>Alexander Pierce</td>
                                    <td>Paypal</td>
                                    <td>11-7-2014</td>
                                    <td>
                                        <select id="inputStatus" class="form-control custom-select">
                                            <option selected disabled>Choose</option>
                                            <option>Pending</option>
                                            <option>Delivery in progress</option>
                                            <option>Delivered</option>
                                        </select>
                                    </td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                                <tr>
                                    <td>657</td>
                                    <td>Bob Doe</td>
                                    <td>Paypal</td>
                                    <td>11-7-2014</td>
                                    <td>
                                        <select id="inputStatus" class="form-control custom-select">
                                            <option selected disabled>Choose</option>
                                            <option>Pending</option>
                                            <option>Delivery in progress</option>
                                            <option>Delivered</option>
                                        </select>
                                    </td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                                <tr>
                                    <td>175</td>
                                    <td>Mike Doe</td>
                                    <td>Paypal</td>
                                    <td>11-7-2014</td>
                                    <td>
                                        <select id="inputStatus" class="form-control custom-select">
                                            <option selected disabled>Choose</option>
                                            <option>Pending</option>
                                            <option>Delivery in progress</option>
                                            <option>Delivered</option>
                                        </select>
                                    </td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Customers order in Da Nang city</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <label>
                                        <input type="text" name="table_search" class="form-control float-right"
                                               placeholder="Search">
                                    </label>

                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 300px;">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>User</th>
                                    <th>Payment methods</th>
                                    <th>Date</th>
                                    <th width="10%">Status</th>
                                    <th>Customer Notes</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>183</td>
                                    <td>John Doe</td>
                                    <td>Paypal</td>
                                    <td>11-7-2014</td>
                                    <td>
                                        <select id="inputStatus" class="form-control custom-select">
                                            <option selected disabled>Choose</option>
                                            <option>Pending</option>
                                            <option>Delivery in progress</option>
                                            <option>Delivered</option>
                                        </select>
                                    </td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                                <tr>
                                    <td>219</td>
                                    <td>Alexander Pierce</td>
                                    <td>Paypal</td>
                                    <td>11-7-2014</td>
                                    <td>
                                        <select id="inputStatus" class="form-control custom-select">
                                            <option selected disabled>Choose</option>
                                            <option>Pending</option>
                                            <option>Delivery in progress</option>
                                            <option>Delivered</option>
                                        </select>
                                    </td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                                <tr>
                                    <td>657</td>
                                    <td>Bob Doe</td>
                                    <td>Paypal</td>
                                    <td>11-7-2014</td>
                                    <td>
                                        <select id="inputStatus" class="form-control custom-select">
                                            <option selected disabled>Choose</option>
                                            <option>Pending</option>
                                            <option>Delivery in progress</option>
                                            <option>Delivered</option>
                                        </select>
                                    </td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                                <tr>
                                    <td>175</td>
                                    <td>Mike Doe</td>
                                    <td>Paypal</td>
                                    <td>11-7-2014</td>
                                    <td>
                                        <select id="inputStatus" class="form-control custom-select">
                                            <option selected disabled>Choose</option>
                                            <option>Pending</option>
                                            <option>Delivery in progress</option>
                                            <option>Delivered</option>
                                        </select>
                                    </td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                                <tr>
                                    <td>134</td>
                                    <td>Jim Doe</td>
                                    <td>Paypal</td>
                                    <td>11-7-2014</td>
                                    <td>
                                        <select id="inputStatus" class="form-control custom-select">
                                            <option selected disabled>Choose</option>
                                            <option>Pending</option>
                                            <option>Delivery in progress</option>
                                            <option>Delivered</option>
                                        </select>
                                    </td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                                <tr>
                                    <td>494</td>
                                    <td>Victoria Doe</td>
                                    <td>Paypal</td>
                                    <td>11-7-2014</td>
                                    <td>
                                        <select id="inputStatus" class="form-control custom-select">
                                            <option selected disabled>Choose</option>
                                            <option>Pending</option>
                                            <option>Delivery in progress</option>
                                            <option>Delivered</option>
                                        </select>
                                    </td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                                <tr>
                                    <td>832</td>
                                    <td>Michael Doe</td>
                                    <td>Paypal</td>
                                    <td>11-7-2014</td>
                                    <td>
                                        <select id="inputStatus" class="form-control custom-select">
                                            <option selected disabled>Choose</option>
                                            <option>Pending</option>
                                            <option>Delivery in progress</option>
                                            <option>Delivered</option>
                                        </select>
                                    </td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                                <tr>
                                    <td>982</td>
                                    <td>Rocky Doe</td>
                                    <td>Paypal</td>
                                    <td>11-7-2014</td>
                                    <td>
                                        <select id="inputStatus" class="form-control custom-select">
                                            <option selected disabled>Choose</option>
                                            <option>Pending</option>
                                            <option>Delivery in progress</option>
                                            <option>Delivered</option>
                                        </select>
                                    </td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Customers order in Ho Noi Minh city</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <label>
                                        <input type="text" name="table_search" class="form-control float-right"
                                               placeholder="Search">
                                    </label>
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 300px;">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>User</th>
                                    <th>Payment methods</th>
                                    <th>Date</th>
                                    <th width="10%">Status</th>
                                    <th>Customer Notes</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>183</td>
                                    <td>John Doe</td>
                                    <td>Paypal</td>
                                    <td>11-7-2014</td>
                                    <td>
                                        <select id="inputStatus" class="form-control custom-select">
                                            <option selected disabled>Choose</option>
                                            <option>Pending</option>
                                            <option>Delivery in progress</option>
                                            <option>Delivered</option>
                                        </select>
                                    </td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                                <tr>
                                    <td>219</td>
                                    <td>Alexander Pierce</td>
                                    <td>Paypal</td>
                                    <td>11-7-2014</td>
                                    <td>
                                        <select id="inputStatus" class="form-control custom-select">
                                            <option selected disabled>Choose</option>
                                            <option>Pending</option>
                                            <option>Delivery in progress</option>
                                            <option>Delivered</option>
                                        </select>
                                    </td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                                <tr>
                                    <td>657</td>
                                    <td>Bob Doe</td>
                                    <td>Paypal</td>
                                    <td>11-7-2014</td>
                                    <td>
                                        <select id="inputStatus" class="form-control custom-select">
                                            <option selected disabled>Choose</option>
                                            <option>Pending</option>
                                            <option>Delivery in progress</option>
                                            <option>Delivered</option>
                                        </select>
                                    </td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                                <tr>
                                    <td>175</td>
                                    <td>Mike Doe</td>
                                    <td>Paypal</td>
                                    <td>11-7-2014</td>
                                    <td>
                                        <select id="inputStatus" class="form-control custom-select">
                                            <option selected disabled>Choose</option>
                                            <option>Pending</option>
                                            <option>Delivery in progress</option>
                                            <option>Delivered</option>
                                        </select>
                                    </td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                                <tr>
                                    <td>134</td>
                                    <td>Jim Doe</td>
                                    <td>Paypal</td>
                                    <td>11-7-2014</td>
                                    <td>
                                        <select id="inputStatus" class="form-control custom-select">
                                            <option selected disabled>Choose</option>
                                            <option>Pending</option>
                                            <option>Delivery in progress</option>
                                            <option>Delivered</option>
                                        </select>
                                    </td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                                <tr>
                                    <td>494</td>
                                    <td>Victoria Doe</td>
                                    <td>Paypal</td>
                                    <td>11-7-2014</td>
                                    <td>
                                        <select id="inputStatus" class="form-control custom-select">
                                            <option selected disabled>Choose</option>
                                            <option>Pending</option>
                                            <option>Delivery in progress</option>
                                            <option>Delivered</option>
                                        </select>
                                    </td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                                <tr>
                                    <td>832</td>
                                    <td>Michael Doe</td>
                                    <td>Paypal</td>
                                    <td>11-7-2014</td>
                                    <td>
                                        <select id="inputStatus" class="form-control custom-select">
                                            <option selected disabled>Choose</option>
                                            <option>Pending</option>
                                            <option>Delivery in progress</option>
                                            <option>Delivered</option>
                                        </select>
                                    </td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                                <tr>
                                    <td>982</td>
                                    <td>Rocky Doe</td>
                                    <td>Paypal</td>
                                    <td>11-7-2014</td>
                                    <td>
                                        <select id="inputStatus" class="form-control custom-select">
                                            <option selected disabled>Choose</option>
                                            <option>Pending</option>
                                            <option>Delivery in progress</option>
                                            <option>Delivered</option>
                                        </select>
                                    </td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Order canceled / exchanged / maintenance</h3>

                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 150px;">
                                    <label>
                                        <input type="text" name="table_search" class="form-control float-right"
                                               placeholder="Search">
                                    </label>
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0" style="height: 300px;">
                            <table class="table table-head-fixed text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>User</th>
                                    <th>Payment methods</th>
                                    <th>Date</th>
                                    <th width="10%">Status</th>
                                    <th>Reason</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>183</td>
                                    <td>John Doe</td>
                                    <td>Paypal</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-success">Canceled</span></td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                                <tr>
                                    <td>219</td>
                                    <td>Alexander Pierce</td>
                                    <td>Paypal</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-warning">Exchanged</span></td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                                <tr>
                                    <td>657</td>
                                    <td>Bob Doe</td>
                                    <td>Paypal</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-primary">Canceled</span></td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                                <tr>
                                    <td>175</td>
                                    <td>Mike Doe</td>
                                    <td>Paypal</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-danger">Mintenance</span></td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                                <tr>
                                    <td>134</td>
                                    <td>Jim Doe</td>
                                    <td>Paypal</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-success">Mintenance</span></td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                                <tr>
                                    <td>494</td>
                                    <td>Victoria Doe</td>
                                    <td>Paypal</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-warning">Mintenance</span></td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                                <tr>
                                    <td>832</td>
                                    <td>Michael Doe</td>
                                    <td>Paypal</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-primary">Mintenance</span></td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                                <tr>
                                    <td>982</td>
                                    <td>Rocky Doe</td>
                                    <td>Paypal</td>
                                    <td>11-7-2014</td>
                                    <td><span class="tag tag-danger">Mintenance</span></td>
                                    <td>Bacon ipsum dolor sit amet salami venison chicken flank fatback doner.</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
