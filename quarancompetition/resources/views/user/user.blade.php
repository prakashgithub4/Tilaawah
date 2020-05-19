@extends('layouts.layouts')
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>DataTables</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title">DataTable with minimal features & hover style</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>SL</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Role</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                  <?php  $count = 1;?>
                  @foreach($users as $all)
                <tr>
                  <td>{{$count}}</td>
                  <td>{{$all['name']}}</td>
                  <td>{{$all['email']}}</td>
                  <td> {{$all['role']}}</td>
                  <td>{{$all['created_at']}}</td>
                  @if($all['status']=="pending")
                  <td><a href="{{url('user/status/'.$all['id']).'/'.$all['status']}}" class="btn btn-primary">{{$all['status']}}</a>  <a href="{{url('user/contact/'.$all['id'])}}" class="btn btn-info"><i class="fa fa- fa-eye" aria-hidden="true"></i></a></td>
                  @elseif($all['status']=="approve")
                   <td><a href="{{url('user/status/'.$all['id']).'/'.$all['status']}}" class="btn btn-success">{{$all['status']}}</a>  <a href="{{url('user/contact/'.$all['id'])}}" class="btn btn-info"><i class="fa fa- fa-eye" aria-hidden="true"></i></a></td>
                    @else 
                   <td><a href="{{url('user/status/'.$all['id']).'/'.$all['status']}}" class="btn btn-warning">{{$all['status']}}</a>  <a href="{{url('user/contact/'.$all['id'])}}" class="btn btn-info"><i class="fa fa- fa-eye" aria-hidden="true"></i></a></td>
                   @endif

                </tr>
                <?php $count++; ?>
                @endforeach
               
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
    </section>
    <!-- /.content -->
  </div>
  @endsection