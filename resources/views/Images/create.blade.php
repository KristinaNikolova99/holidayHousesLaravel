@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <a href="{{ URL::to('images') }}" class="btn btn-primary">List all</a></a></br></br></br>
                        <h1 style="font-size = 40px, text-align:center">Add Image</h1>
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

                        <form method="post" action="{{url('images')}}" enctype="multipart/form-data">
                            <div class="form-group row">
                                {{csrf_field()}}
                                <label for="lgFormGroupInput" class="col-sm-2 col-form-label col-form-label-lg">Image Description: </label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control form-control-lg" id="lgFormGroupInput" placeholder="imageDescription" name="imageDescription">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="customImage" class="col-sm-2 col-form-label col-form-label-lg">Image: </label>
                                <div class="col-sm-10">
                                    <input type="file" class="form-control form-control-lg" id="customImage" placeholder="customImage" name="customImage">
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
