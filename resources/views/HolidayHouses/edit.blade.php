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
                        <!-- will be used to show any messages 
                        @if (Session::has('message'))
                            <div class="alert alert-info">{{ Session::get('message') }}</div>
                        @endif
                        -->

                        <form method="post" action="{{action('HolidayHousesController@update', $holidayhouse->id)}}">
                            <div class="form-group row">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="PATCH">
                                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Name</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" value={{ $holidayhouse->name }} />
                                </div>
                                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">LocationID</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="location_id" value={{ $holidayhouse->location_id }} />
                                </div>
                                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Number of rooms</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="numberOfRooms" value={{ $holidayhouse->numberOfRooms }} />
                                </div>
                                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Number of beds</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="numberOfBeds" value={{ $holidayhouse->numberOfBeds }} />
                                </div>
                                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">TypeID</label>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="type_id" value={{ $holidayhouse->type_id }} />
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
