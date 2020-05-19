 @extends('layouts.layouts')
 @section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Question Assign</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Question</a></li>
              <li class="breadcrumb-item active">Assign</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title"> Question </h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             <!--  -->
             
              <form action="{{url('admin/question/assign/save')}}" method="post" role="form" id="quickForm">
                @csrf
                <div class="card-body">
                 
                 <div class="form-group">
                    <label for="exampleInputPassword1">Qustion</label>
                    <!-- <input type="text"  class="form-control" name="question" id="question" placeholder="Qustion" value="<?php echo @$question[0]->question; ?>"> -->
                    <select name="question" class="form-control">
                    	<option  value="">Select</option>
                    	@foreach($questions as $q)
                    	<option value="{{$q->id}}">{{$q->question}}</option>
                    	@endforeach
                    </select>
                    @if($errors->has('question'))
                    <label><small style="color:red">{{$errors->first('question')}}</small></label>
                    @endif
                    
                  </div>
                 
                  <div class="form-group">
                  <label for="exampleInputPassword1">Assigning Members</label>
                 <select name="members" class="form-control">
                 	<option value="">Select</option>
                 	@foreach($member as $mem)
                 	<option value="{{$mem['id']}}">{{$mem['name']}}</option>
                 	@endforeach
                 </select>
                    @if($errors->has('members'))
                    <label><small style="color:red">{{$errors->first('members')}}</small></label>
                    @endif
                  </div>

                 

                
                </div>
                <!-- /.card-body -->
               
               
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>

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
                  <th>Member Name</th>
                 
                  <th></th>
                </tr>
                </thead>
                <tbody>
                 <?php $count = 1;?>
                 @foreach($assigndetails as $assign)
                <tr>
                	<td>{{$count}}</td>
                	<td>{{$assign['question']}}</td>
                	<td>{{$assign['name']}}</td>
                	<td></td>
                	
                	
 
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
                </div>
                
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  @endsection

  