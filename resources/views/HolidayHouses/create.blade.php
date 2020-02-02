  
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                       <a href="{{ URL::to('holidayhouses') }}" class="btn btn-primary">List all</a></br></br>
                       <h1 style="font-size = 40px">Create Holiday House</h1>
                    </div>

                    <div class="panel-body">
                        
                        @if (Session::has('message'))
                            <div class="alert alert-info">{{ Session::get('message') }}</div>
                        @endif

                        @if ($errors->any())
                       <div class="alert alert-danger">
                       <ul>
                       @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                       @endforeach
                        </ul>
                             </div>
                        @endif
                        
                        <form method="post" action="{{url('holidayhouses')}}">
                            <div class="form-group row">
                                {{csrf_field()}}
                                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Name: </label></br></br></br>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="name" name="name">
                                </div>
                                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Location: </label></br></br></br>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="location_id" name="location_id">
                                </div>
                                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Number of rooms: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="numberOfRooms" name="numberOfRooms">
                                </div>
                                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Number of beds: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="numberOfBeds" name="numberOfBeds">
                                </div>
                                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Type: </label></br></br></br>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="type_id" name="type_id">
                                </div>
                                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Image: </label></br></br></br>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="image_id" name="image_id">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-2"></div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
