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
                        <form role="form" method='post' enctype="multipart/form-data">
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label>Project Name</label>
                                    <input type="text" class="form-control" placeholder="Project Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Time By Need</label>
                                    <input type="text" class="form-control" placeholder="Time in months">
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <label>Project Description</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>

                            <div class="form-group">
                                <label>Add Documentation</label>
                                <input type="file">
                                <p class="help-block"></p>
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
