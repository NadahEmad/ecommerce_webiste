<x-dashboard-layout>
    @section('title','Dashboard')
    <!-- Main Content -->
    <div id="content">

        @include('components.dashboard.topbar')

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            </div>
            @if(Auth::user()->hasRole('admin'))

            <!-- Content Row -->
            <div class="row">

                <!-- total_users (Monthly) Card Example -->
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        Total Earnings</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$total_earning}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-money-bill fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- total_users  Card Example -->
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        All Users</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$total_users}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-user fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- total_users  Card Example -->
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        All Categories</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$total_categories}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-chart-area fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- total_users  Card Example -->
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        All Products</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$total_products}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-circle fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- total_users  Card Example -->
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        All Orders</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$total_orders}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-shopping-basket fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- total_users  Card Example -->
                <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card border-left-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        All Roles
                                    </div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">{{$total_roles}}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-lock fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            @endif

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    @if(Auth::user()->hasRole('admin'))
                        <h6 class="m-0 font-weight-bold text-primary">All Orders</h6>
                    @else
                        <h6 class="m-0 font-weight-bold text-primary">My Orders</h6>
                    @endif


                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>

                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Items</th>
                                <th>Country</th>
                                <th>Address</th>
                                <th>Total</th>
                                <th>Date</th>
                            </tr>

                            </thead>

                            <tbody>
                            @foreach ($orders as $order)
                                <tr>

                                    <td>{{$order->id}}</td>
                                    <td>{{$order->user->first_name}}_{{$order->user->last_name}}</td>
                                    <td>
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                            </tr>

                                            </thead>
                                            <tbody>
                                            {{--                                            @dd($order->data)--}}
                                            <div style="display: none">{{$key=0}}</div>
                                            @foreach ($order->data as $item)

                                                <tr>

                                                    <td>{{$item->name}}</td>
                                                    <td>{{$item->price}}</td>
                                                    <td>{{intval($order->items[$key++]->quantity)}}</td>
                                                </tr>


                                            @endforeach

                                            </tbody>

                                        </table>
                                    </td>

                                    <td>{{$order->user->country}}</td>
                                    <td>{{$order->user->address}}</td>
                                    <td>{{$order->total}}</td>
                                    <td>{{\Carbon\Carbon::createFromTimestamp(strtotime($order->created_at))->format('d-m-Y')}}</td>

                                </tr>
                            @endforeach
                            </tbody>

                            <tfoot>

                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Items</th>
                                <th>Country</th>
                                <th>Address</th>
                                <th>Total</th>
                                <th>Date</th>
                            </tr>

                            </tfoot>

                        </table>
                    </div>

                </div>
            </div>


        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->
</x-dashboard-layout>
