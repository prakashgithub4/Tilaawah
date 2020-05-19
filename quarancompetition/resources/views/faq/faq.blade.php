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
                  <th>Title</th>
                  <th>Description</th>
                  <th>Posted by</th>
                  <th>Date</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                 <?php $count = 1;?>
                 @foreach($faq as $f)
                <tr>
                	<td>{{$count}}</td>
                	<td>{{$f->title}}</td>
                	<td>{{$f->description}}</td>
                	<td>{{$f->added_by}}</td>
                	<td>{{$f->created_at}}</td>
                	<td>
                         @if($f->status=='enable')
                		<a href="{{url('admin/faq/status/'.$f->id.'/'.$f->status)}}" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                		@else
                		<a href="{{url('admin/faq/status/'.$f->id.'/'.$f->status)}}" class="btn btn-warning"><i class="far fa-eye-slash"></i></i></a>
                		@endif

                		<a href="{{url('admin/faq/add/'.$f->id)}}" class="btn btn-primary"><i class="fa fa-edit"></i></button>
                		<a href="{{url('admin/faq/delete/'.$f->id)}}" class="btn btn-danger"><i class="fa fa-trash"></i></button>


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