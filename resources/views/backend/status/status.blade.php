@extends('layouts.admin_layout')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css" integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />

<style>
    .card {
        background-color: #fff;
        border-radius: 10px;
        border: none;
        position: relative;
        margin-bottom: 30px;
        box-shadow: 0 0.46875rem 2.1875rem rgba(90, 97, 105, 0.1), 0 0.9375rem 1.40625rem rgba(90, 97, 105, 0.1), 0 0.25rem 0.53125rem rgba(90, 97, 105, 0.12), 0 0.125rem 0.1875rem rgba(90, 97, 105, 0.1);
    }

    .l-bg-cherry {
        background: linear-gradient(to right, #493240, #f09) !important;
        color: #fff;
    }

    .l-bg-blue-dark {
        background: linear-gradient(to right, #373b44, #4286f4) !important;
        color: #fff;
    }

    .l-bg-green-dark {
        background: linear-gradient(to right, #0a504a, #38ef7d) !important;
        color: #fff;
    }

    .l-bg-orange-dark {
        background: linear-gradient(to right, #a86008, #ffba56) !important;
        color: #fff;
    }

    .card .card-statistic-3 .card-icon-large .fas,
    .card .card-statistic-3 .card-icon-large .far,
    .card .card-statistic-3 .card-icon-large .fab,
    .card .card-statistic-3 .card-icon-large .fal {
        font-size: 110px;
    }

    .card .card-statistic-3 .card-icon {
        text-align: center;
        line-height: 50px;
        margin-left: 15px;
        color: #000;
        position: absolute;
        right: -5px;
        top: 20px;
        opacity: 0.1;
    }

    .l-bg-cyan {
        background: linear-gradient(135deg, #289cf5, #84c0ec) !important;
        color: #fff;
    }

    .l-bg-green {
        background: linear-gradient(135deg, #23bdb8 0%, #43e794 100%) !important;
        color: #fff;
    }

    .l-bg-orange {
        background: linear-gradient(to right, #f9900e, #ffba56) !important;
        color: #fff;
    }

    .l-bg-cyan {
        background: linear-gradient(135deg, #289cf5, #84c0ec) !important;
        color: #fff;
    }
</style>


<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4">Dashboard Status</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="{{route('admin.status')}}">Dashboard</a></li>
            <li class="breadcrumb-item active">About Us</li>
        </ol>
        <div class="card mb-4">
        </div>

        <!-- Card Body Start -->
        <div class="col-md-10 ">
            <div class="row ">

                <div class="col-xl-4 col-lg-6">
                    <div class="card l-bg-green-dark">
                        <div class="card-statistic-3 p-4">
                            <div class="card-icon card-icon-large"></div>
                            <div class="mb-4">
                                <h5 class="card-title mb-0">Total Services: </h5>
                            </div>
                            <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8">
                                    <h2 class="d-flex align-items-center mb-0">
                                        {{$service}}
                                    </h2>
                                </div>
                                <!-- <div class="col-4 text-right">
                                    <span>10% <i class="fa fa-arrow-up"></i></span>
                                </div> -->
                            </div>
                            <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                <div class="progress-bar l-bg-orange" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-xl-4 col-lg-6">
                    <div class="card l-bg-blue-dark">
                        <div class="card-statistic-3 p-4">
                            <div class="card-icon card-icon-large"></div>
                            <div class="mb-4">
                                <h5 class="card-title mb-0">Total Testimonial: </h5>
                            </div>
                            <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8">
                                    <h2 class="d-flex align-items-center mb-0">
                                        {{$testimonial}}
                                    </h2>
                                </div>
                                <!-- <div class="col-4 text-right">
                                    <span>10% <i class="fa fa-arrow-up"></i></span>
                                </div> -->
                            </div>
                            <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                <div class="progress-bar l-bg-orange" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6">
                    <div class="card l-bg-cherry">
                        <div class="card-statistic-3 p-4">
                            <div class="card-icon card-icon-large"></div>
                            <div class="mb-4">
                                <h5 class="card-title mb-0">Gallery: </h5>
                            </div>
                            <div class="row align-items-center mb-2 d-flex">
                                <div class="col-8">
                                    <h2 class="d-flex align-items-center mb-0">
                                        {{$portfolio}}
                                    </h2>
                                </div>
                                <!-- <div class="col-4 text-right">
                                    <span>10% <i class="fa fa-arrow-up"></i></span>
                                </div> -->
                            </div>
                            <div class="progress mt-1 " data-height="8" style="height: 8px;">
                                <div class="progress-bar l-bg-orange" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%;"></div>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
        <!-- Card Body End -->




        <!-- All Users Section Start -->
        <div class="col-lg-7 col-md-12">
            <h4 class="card-title fw-bold">
                <span class="lstick d-inline-block align-middle"></span>All Users
            </h4>
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


                        <td>

                            <!-- Modal For update The Values  End-->

                            <div class="col-sm-2">
                                <button type="button" class="btn btn-info btn-sm" data-bs-toggle="modal" data-bs-target="#exampleModal-{{$user->id}}" data-bs-whatever="@mdo">Edit</button>
                                <div class="modal fade" id="exampleModal-{{$user->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">{{$user->name}}</h5>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>

                                            <div class="modal-body">
                                                <form class="ajax-form" action="{{route('admin.status.update', $user->id)}}" method="post">
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

                            <!-- Modal For update The Values Start -->


                        </td>



                        <!-- Delete The User Start -->
                        <td>
                            <div>
                                <form action="{{route('admin.status.destroy', $user->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" name="submit" value="Delete" class="btn btn-outline-danger btn-sm">
                                </form>
                            </div>
                        </td>
                        <!-- Delete The User End -->

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