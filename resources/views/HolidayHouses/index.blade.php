@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{ URL::to('holidayhouses/create') }}" class="btn btn-primary">Add Holiday House</a></br></br>
                        <h1 style="font-size = 40px">Holiday Houses</h1>
                    </div>

                    <div class="panel-body">
                        
                        @if (\Session::has('success'))
                            <div class="alert alert-info">{{\Session::get('success') }}</div>
                        @endif
                        

                        <table class="table table-striped table-bordered">
                            <thead>
                            <tr>
                                <td>ID</td>
                                <td>Name</td>
                                <td>LocationID</td>
                                <td>Number of rooms</td>
                                <td>Number of beds</td>
                                <td>TypeID</td>
                                <td>ImageID</td>

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($holidayhouses as $key => $value)
                                <tr>
                                    <td>{{ $value->id }}</td>
                                    <td>{{ $value->name }}</td>
                                    <td>{{ $value->location_id }}</td>
                                    <td>{{ $value->numberOfRooms }}</td>
                                    <td>{{ $value->numberOfBeds }}</td>
                                    <td>{{ $value->type_id }}</td>
                                    <td>{{ $value->image_id }}</td>

                                   <!--
                                   <img src="<?php echo asset('imagecache/small/' . $value->sampleName);?>" alt="image" /></td>
                                   -->
                                         <td>
                                           <a class="btn btn-small btn-info" href="{{ URL::to('holidayhouses' . '/' . $value->id . '/edit') }}">Edit House</a>
                                       </td>
                                       <td>
                                       <form action="{{action('admin\HolidayHousesController@destroy', $value->id )}}" method="post">
                                            {{csrf_field()}}
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button class="btn btn-danger" type="submit">Delete House</button>
                                        </form>

                                        

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
