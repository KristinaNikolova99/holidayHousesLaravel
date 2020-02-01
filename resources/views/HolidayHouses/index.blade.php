@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Holiday Houses
                        <a href="{{ URL::to('holidayhouses/create') }}" class="pull-right">Add Holiday House</a>
                    </div>

                    <div class="panel-body">
                        <!-- will be used to show any messages -->
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

                                   <!-- <td><img src="<?php echo asset('imagecache/small/' . $value->sampleName);?>" alt="image" /></td>
                                    <!-- we will also add show, edit, and delete buttons -->
                                   <td>

                                       <!-- show the subjects (uses the show method found at GET /admin/subjects/{id} -->
                                       <!--<a class="btn btn-small btn-success" href="{{ URL::to('locations' . $value->id) }}">Show Location</a> -->
                                       <!-- edit this subject (uses the edit method found at GET /admin/subjects/{id}/edit -->
                                       <a class="btn btn-small btn-info" href="{{ URL::to('holidayhouses' . '/' . $value->id . '/edit') }}">Edit House</a>
                                       </td>
                                       <td>
                                       <form action="{{action('admin\LocationsController@destroy', $value->id )}}" method="post">
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
