@extends('base')

@section('content')
    
    @if ($info = Session::get('info'))

        <div class="card" style="padding: 10px">
            <div class="card-body bg-success text-white">
                {{$info}}
            </div>
        </div>
        
    @endif

    <div class="btn" style="float: right">
        <a href="{{url('/venues/create')}}" class="btn btn-primary" >
            Add Venue
        </a>
    </div>
    <h1>List of Venues</h1>
    <table class='table table-bordered table-striped table-sm'>

        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Capacity</th>
                <th>Price</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($venues as $v)
                <tr>
                    <td>{{$v -> name}}</td>
                    <td>{{$v -> address}}</td>
                    <td>{{$v -> capacity}}</td>
                    <td>{{$v -> price}}</td>
                </tr>
                
            @endforeach
        </tbody>
    </table>

@endsection