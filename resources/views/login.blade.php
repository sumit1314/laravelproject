@extends('layout')
@section('content')
<div>
    <h1> login user</h1>
    
    <form method="post" action="login">
            @csrf
            
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" id="email" placeholder="Enter your email">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password">
            </div>
           

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>


@stop