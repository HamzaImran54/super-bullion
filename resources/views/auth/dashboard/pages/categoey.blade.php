@extends('auth.dashboard.layouts.app')
@section('content')


        <!-- CONTENT WRAPPER -->
        <div class="ec-content-wrapper">
            <div class="content">
                <div class="breadcrumb-wrapper breadcrumb-wrapper-2 breadcrumb-contacts">
                        <h1>Category</h1>
                        <p class="breadcrumbs"><span><a href="{{route('dashboard')}}">Home</a></span>
                            <span><i class="mdi mdi-chevron-right"></i></span>Category</p>
                </div>
                @if(session('success'))
                    <div class="alert alert-success" id="success-alert">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="row">
                    <div class="col-md-12">
                        <div class="ec-cat-list card card-default mb-24px">
                            <div class="card-body">
                                <div class="ec-cat-form">
                                    <h4>Add New Category</h4>

                                    <form method="POST" action="{{route('category.create')}}">
                                        @csrf
                                        <div class="form-group row">
                                            <label for="text" class="col-12 col-form-label">Name</label>
                                            <div class="col-12">
                                                <input id="text" name="category_name" class="form-control here slug-title" type="text">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12">
                                                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                        </div>

                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="ec-cat-list card card-default">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                            @foreach ($category as  $category)
                                                <tr>
                                                    <td>
                                                        <span class="ec-sub-cat-count" title="Total Sub Categories">{{$category->id}}</span>
                                                    </td>
                                                    <td>{{isset($category->category_name) ? $category->category_name : ''}}</td>
                                                    <td>
                                                        <button class="btn btn-primary btn-edit  myBTNN"    data-id="{{ $category->id }}">Edit</button>
                                                        <button class="btn btn-primary btn-del" data-id="{{ $category->id }}">Delete</button>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- End Content -->
        </div> <!-- End Content Wrapper -->

        <!-- Edit Category Modal -->
<div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="editModalLabel">Edit Category</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <!-- Your edit form goes here -->
            <form action="{{route('category.update')}}" method="POST">
                @csrf
                <!-- Add your form fields here to edit the category data -->
                <label for="category_name">Category Name:</label>
                <input type="hidden" name="categoryID" id="categoryID">
                <input type="text" class="form-control" name="category_name" id="category_name" value="{{ isset($category->category_name) ? $category->category_name : '' }}">
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>

    </div>
</div>
</div>




        <script>

            // Auto-hide the success alert after 5 seconds
            setTimeout(function() {
                var successAlert = document.getElementById('success-alert');
                if (successAlert) {
                    successAlert.style.display = 'none';
                }
            }, 5000); // 5000 milliseconds = 5 seconds


        </script>

        <script>
            $(document).ready(function(){
                $('.btn-edit').on('click', function () {
                var categoryId = $(this).data('id');
                $('#categoryID').val(categoryId);
                var categoryName = $(this).closest('tr').find('td:eq(1)').text();
                $('#category_name').val(categoryName);
                $('#editModal').modal('show');
                });


                $('.btn-del').click(function(){
                    var categoryId = $(this).data('id');
                    var confirmed = confirm("Are you sure you want to delete this category?");

        if (confirmed) {
            // Proceed with AJAX request
            $.ajax({
                url: "category/delete/" + categoryId, // Update the URL to include the category ID
                type: "POST",
                data: { _token: '{{ csrf_token() }}' }, // Include CSRF token for Laravel
                success: function (response) {
                    alert("Category deleted successfully!");
                    location.reload();
                },
                error: function (error) {
                    alert("An error occurred while deleting the category.");
                }
            });
        }
                });
            })
        </script>

@endsection



