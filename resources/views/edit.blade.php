@extends('layout')
@section('content')
<div>
    <h1>add new resaTAURENT</h1>
   
</div>


<div class="container mt-5">
        <h1>Bootstrap Form Example</h1>
        <form method="post" action="/edit">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" value="{{$data->id}}">
                <input type="text" class="form-control" id="name" value="{{$data->name}}" placeholder="Enter your name">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" value="{{$data->email}}" placeholder="Enter your email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password"  value="{{$data->password}}" placeholder="Enter your password">
            </div>
           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>


</div>


@stop