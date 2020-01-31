@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Types
                        <a href="{{ URL::to('types/create') }}" class="pull-right">Add Type</a>
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
                                <td>Type</td>
                                

                            </tr>
                            </thead>
                            <tbody>
                            @foreach($types as $key => $value)
                                <tr>
                                    <td>{{ $value->id }}</td>
                                    <td>{{ $value->type }}</td>

                                   <!-- <td><img src="<?php echo asset('imagecache/small/' . $value->sampleName);?>" alt="image" /></td> -->
                                    <!--we will also add show, edit, and delete buttons -->
                                    <td>

                                       <!-- show the subjects (uses the show method found at GET /admin/subjects/{id} -->
                                       <!--<a class="btn btn-small btn-success" href="{{ URL::to('locations' . $value->id) }}">Show Location</a> -->
                                       <!-- edit this subject (uses the edit method found at GET /admin/subjects/{id}/edit -->
                                       <a class="btn btn-small btn-info" href="{{ URL::to('types' . '/' . $value->id . '/edit') }}">Edit Type</a>
                                       </td>
                                       <td>
                                       <form action="{{action('admin\TypesController@destroy', $value->id )}}" method="post">
                                            {{csrf_field()}}
                                            <input name="_method" type="hidden" value="DELETE">
                                            <button class="btn btn-danger" type="submit">Delete Type</button>
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
