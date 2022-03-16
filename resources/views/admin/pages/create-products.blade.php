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

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- home pictures-->
            <div class="col-md-6">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">home pictures</h3>
                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputStatus">Choose the location to save the image</label>
                            <select id="inputStatus" class="form-control custom-select">
                                <option selected disabled>Choose</option>
                                <option>home/slide (625x720px)</option>
                                <option>home/banner 1 (379x340px)</option>
                                <option>home/banner 2 (370x340px)</option>
                                <option>home/banner 3 (370x340px)</option>
                                <option>home/banner 4 (570x340px)</option>
                                <option>home/banner 5 (570x340px)</option>
                                <option>home/Flash Sale (369x369px)</option>
                                <option>home/Best Sale (760x413px)</option>
                            </select>
                        </div>
                        <div class="text-center mt-5 mb-3">
                            <input type="file" id="files" name="files" multiple>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <a href="#" class="btn btn-secondary">Cancel</a>
                                <input type="submit" value="Save" class="btn btn-success float-right">
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- home pictures-->
            <!-- Create Products-->
            <div class="col-md-6">
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Create Products</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName">Product's name</label>
                            <input type="text" id="inputName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputName">product price</label>
                            <input type="text" id="inputName" class="form-control">
                            <label for="inputName">product price when reduced</label>
                            <input type="text" id="inputName" class="form-control">
                            <label for="inputName">Link video</label>
                            <input type="text" id="inputName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Note</label>
                            <textarea id="inputDescription" class="form-control" rows="4"></textarea>
                            <label for="inputDescription">Description</label>
                            <textarea id="inputDescription" class="form-control" rows="4"></textarea>
                            <label for="inputDescription">Additional Information</label>
                            <textarea id="inputDescription" class="form-control" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputEstimatedBudget">Amount</label>
                            <input type="number" id="inputEstimatedBudget" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputStatus">warehouse</label>
                            <select id="inputStatus" class="form-control custom-select">
                                <option selected disabled>Choose</option>
                                <option>Hanoi</option>
                                <option>Danang</option>
                                <option>Ho Chi Minh</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputStatus">Role</label>
                            <select id="inputStatus" class="form-control custom-select">
                                <option selected disabled>Choose</option>
                                <option>Shop/laptop/ASUS/home (369x369px)</option>
                                <option>Shop/laptop/ASUS (369x369px)</option>
                                <option>Shop/laptop/MSI (369x369px)</option>
                                <option>Shop/laptop/Lenovol (369x369px)</option>
                                <option>Shop/laptop/Macbook (369x369px)</option>
                                <option>Shop/mobile phone/home (369x369px)</option>
                                <option>Shop/mobile phone/SAMSUNG (369x369px)</option>
                                <option>Shop/mobile phone/Iphone (369x369px)</option>
                                <option>Shop/mobile phone/Oppo (369x369px)</option>
                                <option>Shop/mobile phone/Vivo (369x369px)</option>
                                <option>Shop/mobile phone/Nokia (369x369px)</option>
                                <option>Shop/Accessory/home(369x369px)</option>
                                <option>Shop/Accessory/Laptop Accessory(369x369px)</option>
                                <option>Shop/Accessory/Phone Accessory(369x369px)</option>
                                <option>Shop/Accessory/Audio Equipments(369x369px)</option>
                                <option>Shop/Accessory/Sammart home Device(369x369px)</option>
                                <option>Shop/Accessory/ Archive Driver(369x369px)</option>
                                <option>Shop/Fashion shopping/home(369x369px)</option>
                                <option>Shop/Fashion shopping/T-Shirt (369x369px)</option>
                                <option>Shop/Fashion shopping/Trousers (369x369px)</option>
                                <option>Shop/Fashion shopping/Hand Bag (369x369px)</option>
                                <option>Shop/Fashion shopping/Fashion Accessories (369x369px)</option>
                                <option>Market (369x369px)</option>
                            </select>
                        </div>
                        <div class="text-center mt-5 mb-3">
                            <input type="file" id="files" name="files" multiple>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <a href="#" class="btn btn-secondary">Cancel</a>
                                <input type="submit" value="Save" class="btn btn-success float-right">
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- //Create Products-->
            <!-- Edit Products-->
            <div class="col-md-6">
                <div class="card card-secondary">
                    <div class="card-header">
                        <h3 class="card-title">Edit Products</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="inputName">Full product name when creating</label>
                            <input type="text" id="inputName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputName">New Name</label>
                            <input type="text" id="inputName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputName">product price</label>
                            <input type="text" id="inputName" class="form-control">
                            <label for="inputName">product price when reduced</label>
                            <input type="text" id="inputName" class="form-control">
                            <label for="inputName">Link video</label>
                            <input type="text" id="inputName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputDescription">Note</label>
                            <textarea id="inputDescription" class="form-control" rows="4"></textarea>
                            <label for="inputDescription">Description</label>
                            <textarea id="inputDescription" class="form-control" rows="4"></textarea>
                            <label for="inputDescription">Additional Information</label>
                            <textarea id="inputDescription" class="form-control" rows="4"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="inputEstimatedBudget">Amount</label>
                            <input type="number" id="inputEstimatedBudget" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="inputStatus">warehouse</label>
                            <select id="inputStatus" class="form-control custom-select">
                                <option selected disabled>Choose</option>
                                <option>Hanoi</option>
                                <option>Danang</option>
                                <option>Ho Chi Minh</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="inputStatus">Role</label>
                            <select id="inputStatus" class="form-control custom-select">
                                <option selected disabled>Choose</option>
                                <option>Shop/laptop/ASUS/home (369x369px)</option>
                                <option>Shop/laptop/ASUS (369x369px)</option>
                                <option>Shop/laptop/MSI (369x369px)</option>
                                <option>Shop/laptop/Lenovol (369x369px)</option>
                                <option>Shop/laptop/Macbook (369x369px)</option>
                                <option>Shop/mobile phone/home (369x369px)</option>
                                <option>Shop/mobile phone/SAMSUNG (369x369px)</option>
                                <option>Shop/mobile phone/Iphone (369x369px)</option>
                                <option>Shop/mobile phone/Oppo (369x369px)</option>
                                <option>Shop/mobile phone/Vivo (369x369px)</option>
                                <option>Shop/mobile phone/Nokia (369x369px)</option>
                                <option>Shop/Accessory/home(369x369px)</option>
                                <option>Shop/Accessory/Laptop Accessory(369x369px)</option>
                                <option>Shop/Accessory/Phone Accessory(369x369px)</option>
                                <option>Shop/Accessory/Audio Equipments(369x369px)</option>
                                <option>Shop/Accessory/Sammart home Device(369x369px)</option>
                                <option>Shop/Accessory/ Archive Driver(369x369px)</option>
                                <option>Shop/Fashion shopping/home(369x369px)</option>
                                <option>Shop/Fashion shopping/T-Shirt (369x369px)</option>
                                <option>Shop/Fashion shopping/Trousers (369x369px)</option>
                                <option>Shop/Fashion shopping/Hand Bag (369x369px)</option>
                                <option>Shop/Fashion shopping/Fashion Accessories (369x369px)</option>
                                <option>Market (369x369px)</option>
                            </select>
                        </div>
                        <div class="text-center mt-5 mb-3">
                            <input type="file" id="files" name="files" multiple>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <a href="#" class="btn btn-secondary">Cancel</a>
                                <input type="submit" value="Save" class="btn btn-success float-right">
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            <!-- //Edit Products-->
        </div>
    </section>
    <!-- //Main content -->
@endsection
