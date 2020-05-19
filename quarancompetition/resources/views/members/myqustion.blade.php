 @extends('layouts.layouts')
 @section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>My Question</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Member</a></li>
              <li class="breadcrumb-item active">My Question</li>
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
                <h3 class="card-title"></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             <!--  -->
             
              <form  method="post" role="form" id="quickForm">
                @csrf

               
                <div class="card-body">
                 
                 <div id="question" class="form-group">
                    <label for="exampleInputPassword1">Your Question </label>
                    
                    <textarea class="form-control">{{$myquestion[0]['question']}}</textarea>
                    
                  </div>
                
                </div>
                <!-- /.card-body -->
               
               
                <div class="card-footer">
                 
                  <button type="button" id="next" onclick="countQuestion()" class="btn btn-primary">Next</button>
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
<script>
  var count = 1;
  function countQuestion(){

   let baseUrl="{{url('countquestion')}}"+'/'+count;
   $.ajax({
             url: baseUrl,
                type: 'GET',
                
                success: function(data)
                {
                  
                  if(data!=0){

                     $('#question').html(data);
                  }
                  else {
                    $('#next').prop('disabled', true);
                  }
                 
                  //location.reload();
                  
                }
            });
   count++;
  }
 

  </script>