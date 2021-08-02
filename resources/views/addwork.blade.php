@extends('layouts.developer')
@section('usercontent')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
    <div class="row">
        <ol class="breadcrumb">
            <li><a href="#">
                <em class="fa fa-tasks"></em>
            </a></li>
            <li class="active">Add Work</li>
        </ol>
    </div><!--/.row-->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                {{-- <div class="panel-heading">Forms</div> --}}
                <div class="panel-body">
                    <div class="col-md-12">
                        <form action= "{{route('store')}}" role="form" method='post' enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Project Name</label>
                                    <input type="text" class="form-control" name="project_name" value="{{old('project_name')}}" placeholder="Project Name">
                                    @error('project_name')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Time By Need</label>
                                    <input type="text" class="form-control" name="time" value="{{old('time')}}" placeholder="Time in months">
                                    @error('time')
                                        <span class="text-danger">{{$message}}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label>Project Description</label>
                                <textarea class="form-control" name="desc" rows="3">{{old('desc')}}</textarea>
                                @error('desc')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label>Add Documentation</label>
                                <input type="file" name="file">
                                <p class="help-block"></p>
                                @error('file')
                                    <span class="text-danger">{{$message}}</span>
                                @enderror
                            </div>
                            <div class= "form-group col-md-12 text-right">
                                <button type="submit" class="btn btn-success">Success</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div><!-- /.panel-->
        </div><!-- /.col-->
    </div><!-- /.row -->
</div><!--/.main-->
@endsection
