@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Holiday Houses
                        
                    </div>

                    <div class="panel-body">
                        <!-- will be used to show any messages -->
                        @if (\Session::has('success'))
                            <div class="alert alert-info">{{\Session::get('success') }}</div>
                        @endif

                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <!--
                                <td>ID</td>
                                -->
                                <td>Name</td>
                                <td>Location</td>
                                <!--
                                <td>Number of rooms</td>
                                <td>Number of beds</td>
                                -->
                                <td>Type</td>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($holidayhouses as $key => $value)
                                <tr>
                                    <!--
                                    <td>{{ $value->id }}</td>
                                    -->
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->location_id }}</td>
                                    <!--
                                    <td>{{ $value->numberOfRooms }}</td>
                                    <td>{{ $value->numberOfBeds }}</td>
                                    -->
                                    <td>{{ $value->type_id }}</td>

                                   <!-- <td><img src="<?php echo asset('imagecache/small/' . $value->sampleName);?>" alt="image" /></td>
                                    <!-- we will also add show, edit, and delete buttons -->

                                    <td>
                                      <!-- <a class="btn btn-small btn-info" href="{{ URL::to('holidayhousesusers' . '/' . $value->id . '/show') }}">Show House</a>
                                      
                                      <form action="{{action('HolidayHousesUserController@show', $value->id )}}" method="get">
                                            {{csrf_field()}}
                                            <input name="_method" type="hidden" value="Show">
                                            <button class="btn btn-danger" type="submit">Show House</button>
                                        </form>
                                        -->
                                        <a class="btn btn-small btn-success" href="{{ URL::to('holidayhousesusers' . '/' . $value->id ) }}">Show House</a>
                                      
                                    </td>
                                   
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
