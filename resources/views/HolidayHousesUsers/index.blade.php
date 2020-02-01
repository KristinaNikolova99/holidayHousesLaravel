@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h1 style="font-size:45px"> Holiday Houses</h1>  
                    </div>

                    <div class="panel-body">

                        @if (\Session::has('success'))
                            <div class="alert alert-info">{{\Session::get('success') }}</div>
                        @endif

                       <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <td>Name</td>
                                <td>Location</td>
                                <td>Type</td>
                                <td>Number of rooms</td>
                                <td>Number of beds</td>
                            </tr>
                            </thead>
                            <tbody>
                                
                                   @foreach($holidayhouses as $detail)
                                   <tr>
                                       <td>{{$detail->name}}</td>
                                       <td>{{$detail->location}}</td>
                                       <td>{{$detail->type}}</td>
                                       <td>{{$detail->numberOfRooms}}</td>
                                       <td>{{$detail->numberOfBeds}}</td>
                                       <td>
                                       <a class="btn btn-small btn-success" href="{{ URL::to('holidayhousesusers' . '/' . $detail->id ) }}">Show House</a>
                                       </td>
                                   </tr>
                                       
                                    @endforeach
                       
                                </tr>
                            
                        
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
