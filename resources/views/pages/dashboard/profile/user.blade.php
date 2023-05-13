<x-dashboard-layout>
    @section('title','User Profile')
    <!-- Main Content -->
    <div id="content">

        @include('components.dashboard.topbar')

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">User Profile</h1>
            </div>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">User Profile From</h6>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('user_profile.update',$user->id)}}" >
                        @csrf

                        <div class="mb-3">
                            <label for="first_name" class="form-label">First Name</label>
                            <input type="text" name="first_name" class="form-control" id="first_name"  value="{{$user->first_name}}">
                            @error('first_name') <p class="text-danger">{{$message}}</p> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="last_name" class="form-label">Last Name</label>
                            <input type="text" name="last_name" class="form-control" id="last_name"  value="{{$user->last_name}}">
                            @error('last_name') <p class="text-danger">{{$message}}</p> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" id="email"  value="{{$user->email}}">
                            @error('email') <p class="text-danger">{{$message}}</p> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" id="password">
                            @error('password') <p class="text-danger">{{$message}}</p> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Password Confirmation</label>
                            <input type="password" name="password_confirmation" class="form-control" id="password_confirmation"  >
                            @error('password_confirmation') <p class="text-danger">{{$message}}</p> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="country" class="form-label">Country</label>
                            <input type="text" name="country" class="form-control" id="country"  value="{{$user->country}}">
                            @error('country') <p class="text-danger">{{$message}}</p> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="address" class="form-label">Address</label>
                            <input type="text" name="address" class="form-control" id="address"  value="{{$user->address}}">
                            @error('address') <p class="text-danger">{{$message}}</p> @enderror
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>

                    </form>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->
    </div>

</x-dashboard-layout>
