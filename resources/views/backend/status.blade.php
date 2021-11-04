@extends('layouts.admin_layout')
@section('content')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard Status</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.status')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">About Us</li>
        </ol>
        <div class="card mb-4">
        </div>

        <!-- All Users Section Start -->
        <div>
            <h3>All Users</h3>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Serial</th>
                        <th scope="col">Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @if (count($users)>0)
                    @php($count=0)
                    @foreach ($users as $user)
                    @php($count++)
                    <tr>
                        <th scope="row">{{$count}}</th>
                        <td>{{$user->name}}</td>

                        @if ($user->admin == 0)
                        <td>
                            <button class="btn btn-outline-danger btn-sm">User
                            </button>
                        </td>
                        @else ($user->admin == 1)
                        <td>
                            <button class="btn btn-outline-success btn-sm">Admin
                            </button>
                        </td>
                        @endif
                        <!-- Modal For update The Values  End-->

                        <!-- Modal For update The Values Start -->
                        <td>
                            <div class="col-sm-2">
                                <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Edit</button>
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">{{$user->name}}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{route('admin.status.update')}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <input type="hidden" class="form-control" name="id" value="{{$user->id}}">
                                                    <div class="mb-3">
                                                        <label class="col-form-label">Name:</label>
                                                        <input type="text" class="form-control" name="name" value="{{$user->name}}">
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="col-form-label">Email:</label>
                                                        <input type="text" class="form-control" name="email" value="{{$user->email}}">
                                                    </div>

                                                    <!-- Admin Selection Start -->
                                                    <div class="col-md-12 col-12 form-group mt-3">
                                                        Status:
                                                        <select class="form-control select2 mt-2" name="status">
                                                            <option @if ($user->admin == true) selected @endif value="1">Admin</option>
                                                            <option @if ($user->admin == false) selected @endif value="0">User</option>
                                                        </select>
                                                    </div>
                                                    <!-- Admin Selection End -->

                                                    <div class="mt-5">
                                                        <button class="btn btn-success" type="submit">
                                                            save
                                                        </button>
                                                    </div>

                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <!-- Delete The User Start -->
                            <div>
                                <form action="{{route('admin.status.destroy', $user->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" name="submit" value="Delete" class="btn btn-outline-danger btn-sm">
                                </form>
                            </div>
                            <!-- Delete The User End -->
                        </td>
                    </tr>
                    @endforeach
                    @endif
                </tbody>
            </table>
        </div>
        <!-- All Users Section End -->





</main>

@endsection

<script>
    var exampleModal = document.getElementById('exampleModal')
    exampleModal.addEventListener('show.bs.modal', function(event) {
        // Button that triggered the modal
        var button = event.relatedTarget
        // Extract info from data-bs-* attributes
        var recipient = button.getAttribute('data-bs-whatever')
        // If necessary, you could initiate an AJAX request here
        // and then do the updating in a callback.
        //
        // Update the modal's content.
        var modalTitle = exampleModal.querySelector('.modal-title')
        var modalBodyInput = exampleModal.querySelector('.modal-body input')

        modalTitle.textContent = 'New message to ' + recipient
        modalBodyInput.value = recipient
    })
</script>