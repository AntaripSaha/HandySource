{{-- @if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <strong>Error!</strong>{{$error}}
        </div>
    @endforeach
@endif --}}

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif


@if (session('error'))
        <div class="alert alert-danger alert-dismissible">
            {{-- <button type="button" class="close" data-dismiss="alert">&times;</button> --}}
            <strong>Error!</strong>{{session('error')}}
        </div>
@endif

@if (session('success'))
        <div class="alert alert-success alert-dismissible">
            {{-- <button type="button" class="close" data-dismiss="alert">&times;</button> --}}
            <strong>Success</strong>{{session('success')}}
        </div>
@endif