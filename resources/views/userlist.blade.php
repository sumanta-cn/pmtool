@extends('layouts.dashboard')
@section('admincontent')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Inactive Users</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User List</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">List of User</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="userlist" class="table table-bordered table-hover">
                  <thead class="thead-dark text-center">
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created on</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                        <?php if(isset($users) && !empty($users)){$i=1;foreach($users as $userval){?>
                            <tr class="tr{{$userval->id}}">
                                <td>{{$i++}}</td>
                                <td>{{$userval->name}}</td>
                                <td>{{$userval->email}}</td>
                                <td class="text-nowrap">{{date_format((date_create($userval->created_at)),"dS F, g:i A, Y")}}</td>
                                <td class="text-nowrap text-center">
                                    <a href="javascript:void(0)" class="btn btn-sm btn-success mr-2 approve" data-id="{{$userval->id}}" title="Approve user"><i class="fas fa-check"></i></a>
                                    <a href="javascript:void(0)" class="btn btn-sm btn-danger delete" data-id="{{$userval->id}}" title="Delete User"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        <?php } } ?>
                  </tbody>
                  <tfoot class="thead-dark text-center">
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Created on</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <script>

  </script>
@endsection

