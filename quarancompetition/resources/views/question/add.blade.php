 @extends('layouts.layouts')
 @section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Question <?php echo @($$question[0]=='')?'Add': 'Edit'; ?></h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Question</a></li>
              <li class="breadcrumb-item active"><?php echo @($question[0]=='')?'ADD': 'EDIT'; ?></li>
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
                <h3 class="card-title"> Question <?php echo @($question[0]=='')?'ADD': 'EDIT'; ?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             <!--  -->
             
              <form action="{{url('admin/question/save')}}" method="post" role="form" id="quickForm">
                @csrf

                <input type="hidden" name ="id" value="<?php echo @$question[0]->id; ?>"/>
                <div class="card-body">
                 
                 <div class="form-group">
                    <label for="exampleInputPassword1">Qustion</label>
                    <input type="text"  class="form-control" name="question" id="question" placeholder="Qustion" value="<?php echo @$question[0]->question; ?>">
                     @if($errors->has('question'))
                    <label><small style="color:red">{{$errors->first('question')}}</small></label>
                    @endif
                  </div>
                 
                  <div class="form-group">
                  <label for="exampleInputPassword1">Answer</label>
                  <textarea class="form-control" name="answer"><?php echo @$question[0]->answer; ?></textarea>
                    @if($errors->has('answer'))
                    <label><small style="color:red">{{$errors->first('answer')}}</small></label>
                    @endif
                  </div>

                 

                
                </div>
                <!-- /.card-body -->
               
               
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary"><?php //echo ($faq=='')?'Submit': 'Update'; ?>Submit</button>
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

  