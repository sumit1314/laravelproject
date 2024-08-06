@extends('layout')
@section('content')
<div>
    <h1>list of resto</h1>
    @if(session::get('status'))

    <div class="container mt-5">
        <h1>Bootstrap Alert Examples</h1>

        <!-- Success Alert -->
        <div class="alert alert-success" role="alert">
            This is a success alert—check it out!
        </div>


    @endif
    <div class="container mt-5">
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
            <tr>
            
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">address</th>
            <th scope="col"></th>
            <th>operations</th>

        </thead>
        <tbody>
            @foreach($data as $item)
            <tr>
                <th scope="row">{{$item->id}}</th>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->address}}</td>
                <td><a href="delete/{{$item->id}}"></a></td>
                <td><a href="edit/{{$item->id}}"></a></td>



            </tr>
            @endforeach

        </tbody>
    </table>
</div>




 
</div>


@stop