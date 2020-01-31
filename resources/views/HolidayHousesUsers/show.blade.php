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
                        <!-- will be used to show any messages 
                        @if (Session::has('message'))
                            <div class="alert alert-info">{{ Session::get('message') }}</div>
                        @endif
                        -->
                            <form method="post" action="{{action('HolidayHousesUserController@show', $holidayhouse->id)}}">
                  <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <!--
                                <td>ID</td>
                                -->
                                <td>Name</td>
                                <td>Location</td>
                                <td>Number of rooms</td>
                                <td>Number of beds</td>
                                <td>Type</td>

                            </tr>
                            </thead>
                            <tbody>
                                
                                <tr>
                           
                                    <!--
                                    <td>{{ $holidayhouse->id }}</td>
                                    -->
                                    <td>{{ $holidayhouse->name }}</td>
                                    <td>{{ $holidayhouse->location_id }}</td>
                                    <td>{{ $holidayhouse->numberOfRooms }}</td>
                                    <td>{{ $holidayhouse->numberOfBeds }}</td>
                                    <td>{{ $holidayhouse->type_id }}</td>
                                    
                                   
                       
                                </tr>
                            
                        
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
