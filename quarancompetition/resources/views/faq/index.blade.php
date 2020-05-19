 @extends('layouts.layouts')
 @section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Faq <?php echo ($faq=='')?'Add': 'Edit'; ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">FAQ</a></li>
              <li class="breadcrumb-item active"><?php echo ($faq=='')?'ADD': 'EDIT'; ?></li>
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
                <h3 class="card-title"><?php echo ($faq=='')?'FAQ ADD': 'FAQ EDIT'; ?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             <!--  -->
             
              <form action="{{url('admin/faq/save')}}" method="post" role="form" id="quickForm">
                @csrf

                <input type="hidden" name ="id" value="<?php echo @$faq->id; ?>"/>
                <div class="card-body">
                 
                 <div class="form-group">
                    <label for="exampleInputPassword1">Title</label>
                    <input type="text"  class="form-control" name="title" id="title" placeholder="Title" value="<?php echo @$faq->title; ?>">
                     @if($errors->has('title'))
                    <label><small style="color:red">{{$errors->first('title')}}</small></label>
                    @endif
                  </div>
                 
                  <div class="form-group">
                  <label for="exampleInputPassword1">Description</label>
                  <textarea class="form-control" name="description"><?php echo @$faq->description; ?></textarea>
                    @if($errors->has('description'))
                    <label><small style="color:red">{{$errors->first('description')}}</small></label>
                    @endif
                  </div>

                 

                
                </div>
                <!-- /.card-body -->
               
               
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary"><?php echo ($faq=='')?'Submit': 'Update'; ?></button>
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

  