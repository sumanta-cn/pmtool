@extends('layouts.developer ')
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
                        <table id="" class="table table-bordered table-hover">
                            <thead class="thead-dark text-center">
                            <tr>
                              <th>Id</th>
                              <th>Project Name</th>
                              <th>Estimated Time</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                              <?php if(isset($works) && !empty($works)){$i=1;foreach($works as $work){?>
                                  <tr class="tr{{$work->id}}">
                                      <td>{{$i++}}</td>
                                      <td>{{$work->project_name}}</td>
                                      <td>{{$work->estimated_time}}</td>
                                      <td class="{{$work->status=== 1 ? 'text-success' : 'text-danger'}}">{{$work->status=== 1 ? 'Approved': 'Unapproved'}}</td>
                                      <td class="text-nowrap text-center">
                                          <a href="{{route('viewwork',['id' => $work->id])}}" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                                      </td>
                                  </tr>
                              <?php } } ?>
                            </tbody>
                            <tfoot class="thead-dark text-center">
                            <tr>
                              <th>Id</th>
                              <th>Project Name</th>
                              <th>Estimated Time</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div><!-- /.panel-->
        </div><!-- /.col-->
    </div><!-- /.row -->
</div>
@endsection



