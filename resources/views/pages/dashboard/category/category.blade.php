<x-dashboard-layout>
    @section('title','Categories')
    <!-- Main Content -->
    <div id="content">

        @include('components.dashboard.topbar')

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Categories</h1>
            </div>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Categories From</h6>
                </div>
                <div class="card-body">
                    <form method="post" action="{{route('categories.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">name</label>
                            <input type="text" name="name" class="form-control" id="name" aria-describedby="emailHelp">
                            @error('name') <p class="text-danger">{{$message}}</p> @enderror
                        </div>

                        <div class="mb-3">
                            <label for="tag" class="form-label">Tag</label>
                            <input type="text" name="tag" class="form-control" id="tag" aria-describedby="emailHelp">
                            @error('tag') <p class="text-danger">{{$message}}</p> @enderror

                        </div>

                        <div class="mb-3">
                            <label for="category_image" class="form-label">Image</label>
                            <input type="file" name="category_image" class="form-control" id="category_image" required>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">All Categories</h6>
                </div>
                <div class="card-body">

                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>

                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Tag</th>
                                <th>Image</th>
                                <th>User</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>

                            </thead>

                            <tbody>
                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->name}}</td>
                                    <td>{{$category->tag}}</td>
                                    <td><img src="{{asset('category_images')}}\{{$category->image}}" alt="{{$category->image}}" width="100px" height="100px"></td>
                                    <td>{{$category->user->first_name}}</td>
                                    <td>{{\Carbon\Carbon::createFromTimestamp(strtotime($category->created_at))->format('d-m-Y')}}</td>
                                    <td>
                                        <button type="button" onclick="edit({{$category->id}})" class="btn btn-info" >Edit</button>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>

                            <tfoot>

                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Tag</th>
                                <th>Image</th>
                                <th>User</th>
                                <th>Date</th>
                                <th>Action</th>
                            </tr>

                            </tfoot>

                        </table>
                    </div>

                </div>
            </div>



        </div>
        <!-- /.container-fluid -->

    </div>

    <button type="button" style="display: none" id="edit_button" data-toggle="modal" data-target="#EditModal"></button>

    <!-- End of Main Content -->
    <div class="modal fade" id="EditModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Category</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post">
                        <div class="mb-3">
                            <label for="name_model" class="form-label">name</label>
                            <input type="text" name="name_model" class="form-control" id="name_model" >
                            <input type="hidden" name="id_model"  id="id_model" >
                        </div>

                        <div class="mb-3">
                            <label for="tag_model" class="form-label">Tag</label>
                            <input type="text" name="tag_model" class="form-control" id="tag_model">
                        </div>

                        <div class="mb-3">
                            <img src="" id="image_model" width="50px" height="50px">
                        </div>
                        <div class="mb-3">
                            <label for="category_image_model" class="form-label">Image</label>
                            <input type="file" name="category_image_model" class="form-control" id="category_image_model">
                        </div>

                    </form>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-primary" onclick="update()">Update</button>
                </div>

            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script>
        function update()
        {

            let form_data=new FormData();

            let id =$('#id_model').val();
            let name =$('#name_model').val();
            let tag =$('#tag_model').val();

            let image_src=$('#category_image_model')[0].files;

            form_data.append('_token',"{{ csrf_token() }}");
            form_data.append('id',id);
            form_data.append('name',name);
            form_data.append('tag',tag);
            form_data.append('category_image',image_src[0]);


            $.ajax({

                type:"POST",
                dataType:"json",
                url:"categories/update",
                contentType: false,
                processData: false,
                data:form_data,
                success:function(response){
                    location.reload();
                }

            });

        }

    </script>

    <script>

        function edit(id)
        {
            let data = {
                "_token":"{{ csrf_token() }}"
            };
            $.ajax({
                type: "GET",
                url: "/categories/"+id+"/edit",
                dataType: "json",
                data:data,
                success: function (response)
                {
                    $('#name_model').val(response.data.name);
                    $('#tag_model').val(response.data.tag);
                    $('#id_model').val(response.data.id);

                    // let image_src='category_images'+'\\'+response.data.image;
                    // response.data.image=$('#image_model').attr("src",image_src);
                    $('#edit_button').click();
                }
            });

        }



    </script>


</x-dashboard-layout>
