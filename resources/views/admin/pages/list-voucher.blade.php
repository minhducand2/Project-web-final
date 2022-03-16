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

    <!-- list-voucher -->
    <section class="content">
        <!-- Default box -->
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">List Voucher</h3>

                <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
            <div class="card-body p-0">
                <table class="table table-striped projects">
                    <thead>
                    <tr>
                        <th style="width: 1%">
                            ID
                        </th>
                        <th style="width: 20%">
                            Name Voucher
                        </th>
                        <th style="width: 30%">
                            code
                        </th>
                        <th style="width: 8%" class="text-center">
                            Expiry Date
                        </th>
                        <th style="width: 20%">
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>
                            1
                        </td>
                        <td>
                            <a>
                                Quốc Khánh
                            </a>
                            <br/>
                            <small>
                                Expire 30/04/2021
                            </small>
                        </td>
                        <td>
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a>MungQuocKhanh</a>
                                </li>
                            </ul>
                        </td>

                        <td class="project-state">
                            <span class="right badge badge-danger">Expiry</span>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="#">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            2
                        </td>
                        <td>
                            <a>
                                Quốc Khánh
                            </a>
                            <br/>
                            <small>
                                Expire: 30/04/2022
                            </small>
                        </td>
                        <td>
                            <ul class="list-inline">
                                <a>MungQuocKhanh</a>
                            </ul>
                        </td>
                        <td class="project-state">
                            <span class="badge badge-success">expiry date</span>
                        </td>
                        <td class="project-actions text-right">
                            <a class="btn btn-info btn-sm" href="#">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <a class="btn btn-danger btn-sm" href="#">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </a>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->

    </section>
    <!-- //list-voucher -->


@endsection
