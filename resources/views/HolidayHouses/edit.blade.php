@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Edit Holiday House
                        <a href="{{ URL::to('holidayhouses') }}" class="pull-right">List all</a>
                    </div>

                    <div class="panel-body">
                        <!-- will be used to show any messages -->
                        @if (Session::has('message'))
                            <div class="alert alert-info">{{ Session::get('message') }}</div>
                        @endif

                        <form method="post" action="{{action('HolidayHousesController@update', $id)}}">
                            <div class="form-group row">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="PATCH">
                                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="name" name="name" value="{{$subject->name}}">
                                </div>
                                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Location</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="location_id" name="location_id" value="{{$subject->location_id}}">
                                </div>
                                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Number of rooms</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="numberOfRooms" name="numberOfRooms" value="{{$subject->numberOfRooms}}">
                                </div>
                                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Number of beds</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="numberOfBeds" name="numberOfBeds" value="{{$subject->numberOfBeds}}">
                                </div>
                                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Type</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="type_id" name="type_id" value="{{$subject->type_id}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-2"></div>
                                <button type="submit" class="btn btn-primary">Update</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
