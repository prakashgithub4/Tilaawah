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
                  <th>Question</th>
                  <th>Answer</th>
                  <th>Added By</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                 <?php $count = 1;?>
                 @foreach($question as $q)
                <tr>
                	<td>{{$count}}</td>
                	<td>{{$q->question }}</td>
                	<td>{{$q->answer }}</td>
                	<td>{{$q->added_by}}</td>
                	<td>{{$q->created_at}}</td>
                	<td>
                       	<a href="{{url('admin/question/add/'.$q->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></button>
                		<a href="{{url('admin/question/delete/'.$q->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></button>
 
                	</td>
 
                </tr>
               <?php $count++;?>
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