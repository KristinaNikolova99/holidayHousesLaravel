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

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($holidayhouses as $key => $value)
                                <tr>
                                    <td>{{ $value->id }}</td>
                                    <td>{{ $value->Name }}</td>
                                    <td>{{ $value->LocationID }}</td>
                                    <td>{{ $value->NumberOfRooms }}</td>
                                    <td>{{ $value->NumberOfBeds }}</td>
                                    <td>{{ $value->TypeID }}</td>

                                   <!-- <td><img src="<?php echo asset('imagecache/small/' . $value->sampleName);?>" alt="image" /></td>
                                    <!-- we will also add show, edit, and delete buttons -->
                                    <td>

                                        <form action="{{action('HolidayHousesController@destroy', $value->id )}}" method="post">
                                            {{csrf_field()}}
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button class="btn btn-danger" type="submit">Delete</button>
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
