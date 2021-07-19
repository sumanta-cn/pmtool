@extends('layouts.dashboard')
@section('admincontent')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Active Users</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
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
                <h3 class="card-title">Unroled Users</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="unapprovelist" class="table table-bordered table-hover">
                  <thead class="thead-dark text-center">
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Approved on</th>
                    <th>Select Role</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php if(isset($users) && !empty($users)){$i=1;foreach($users as $userval){?>
                        <tr class="tr{{$userval->id}}">
                            <td>{{$i++}}</td>
                            <td>{{$userval->name}}</td>
                            <td>{{$userval->email}}</td>
                            <td class="text-nowrap">{{date_format((date_create($userval->updated_at)),"dS F, g:i A, Y")}}</td>
                            <td class="align-middle">
                                <select class="form-control form-control-sm roleselect" data-id="{{$userval->id}}">
                                    <option value="">-------Select Role-------</option>
                                    <?php if(isset($roles) && !empty($roles)){foreach($roles as $roleval){?>
                                        <option value="{{$roleval->id}}">{{$roleval->role_name}}</option>
                                    <?php } } ?>
                                </select>
                            </td>
                            <td class="text-nowrap text-center">
                                <div class="td{{$userval->id}}"></div>
                            </td>
                        </tr>
                    <?php } } ?>
                  </tbody>
                  <tfoot class="thead-dark text-center">
                  <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Approved on</th>
                    <th>Select Role</th>
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
