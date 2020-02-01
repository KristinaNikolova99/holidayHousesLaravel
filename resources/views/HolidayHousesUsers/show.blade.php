@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        View Holiday House
                    </div>

                    <div class="panel-body">
                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <td>Name</td>
                                <td>Location</td>
                                <td>Number of rooms</td>
                                <td>Number of beds</td>
                                <td>Type</td>
                            </tr>
                            </thead>
                            <tbody>
                                
                                   
                                     <tr>
                                     @if($details != null)
                                       <td>{{$details->name}}
                                       <td>{{$details->location}}</td>
                                       <td>{{$details->numberOfRooms}}</td>
                                       <td>{{$details->numberOfBeds}}</td>
                                       <td>{{$details->type}}</td>
                                       </tr>
                                       @endif
                                     
                                   
                       
                                </tr>
                            
                        
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
