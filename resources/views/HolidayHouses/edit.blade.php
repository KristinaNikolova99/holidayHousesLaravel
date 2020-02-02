@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{ URL::to('holidayhouses') }}" class="btn btn-primary">List all</a></br></br>
                        <h1 style="font-size = 40px">Edit Holiday House</h1>
                    </div>

                    <div class="panel-body">
                        
                        <form method="post" action="{{action('admin\HolidayHousesController@update', $holidayhouse->id)}}">
                            <div class="form-group row">
                                {{csrf_field()}}
                                <input name="_method" type="hidden" value="PATCH">
                                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="name" value={{ $holidayhouse->name }} />
                                </div>
                                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">LocationID</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="location_id" value={{ $holidayhouse->location_id }} />
                                </div>
                                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Number of rooms</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="numberOfRooms" value={{ $holidayhouse->numberOfRooms }} />
                                </div>
                                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Number of beds</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="numberOfBeds" value={{ $holidayhouse->numberOfBeds }} />
                                </div>
                                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">TypeID</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="type_id" value={{ $holidayhouse->type_id }} />
                                </div>
                                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">ImageID</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="image_id" value={{ $holidayhouse->image_id }} />
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
