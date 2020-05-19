 @extends('layouts.layouts')
 @section('content')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Member Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">User</a></li>
              <li class="breadcrumb-item active">Member</li>
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
                <h3 class="card-title">MEMBER ADD</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              @if(Session::has('success'))
                  <div class="alert alert-success"><span class="glyphicon glyphicon-ok"></span><em> {!! session('success') !!}</em></div>
                @endif
              <form action="{{url('member/save')}}" method="post" role="form" id="quickForm">
                @csrf
                <div class="card-body">
                  <div class="form-group">

                    <label for="exampleInputEmail1">Catagory</label>
                    <select  id="category" name="category" class="form-control">
                      <option disabled="disabled">Select</option>
                      <option value='1'>Level 1</option>
                      <option value='2'>Level 2</option>
                      <option value='3'>Level 3</option>
                      <option value='4'>Level 4</option>
                      <option value='5'>Level 5</option>
                      <option value='6'>Level 6</option>
                      <option value='7'>Level 7</option>
                      <option value='8'>Level 8</option>
                    </select>
                    @if($errors->has('category'))
                    <label><small style="color:red">{{$errors->first('category')}}</small></label>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" name="email" class="form-control" id="email" placeholder="Email" value="{{old('email')}}">
                    @if($errors->has('email'))
                    <label><small style="color:red">{{$errors->first('email')}}</small></label>
                    @endif
                  </div>


                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Password" >
                    @if($errors->has('password'))
                    <label><small style="color:red">{{$errors->first('password')}}</small></label>
                    @endif
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Place Of Study</label>
                    <input type="text" name="placeofstudy" class="form-control" id="placeofstudy" placeholder="Place Of Study"  value="{{old('placeofstudy')}}">
                     @if($errors->has('placeofstudy'))
                    <label><small style="color:red">{{$errors->first('placeofstudy')}}</small></label>
                    @endif
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">City Of Study</label>
                    <input type="text" name="cityofstudy" class="form-control" id="cityofstudy" placeholder="City Of Study" value="{{old('cityofstudy')}}">
                     @if($errors->has('cityofstudy'))
                    <label><small style="color:red">{{$errors->first('cityofstudy')}}</small></label>
                    @endif
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">Name</label>
                    <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{old('name')}}">
                     @if($errors->has('name'))
                    <label><small style="color:red">{{$errors->first('name')}}</small></label>
                    @endif
                  </div>

                  

                  <div class="form-group">
                    <label for="exampleInputPassword1">Birthday</label>
                    <input type="text" name="bday" class="form-control" id="bday" placeholder="Birthday" value="{{old('bday')}}">
                      @if($errors->has('bday'))
                    <label><small style="color:red">{{$errors->first('bday')}}</small></label>
                    @endif
                  </div>

                   <div class="form-group">
                    <label for="exampleInputPassword1">Post Code</label>
                    <input type="text" name="postcode" class="form-control" id="exampleInputPassword1" placeholder="Post Code"  value="{{old('postcode')}}">
                  </div>

                  <div class="form-group">
                  <label for="exampleInputPassword1">Address1</label>
                  <textarea class="form-control" name="address1"></textarea>
                  </div>

                  <div class="form-group">
                  <label for="exampleInputPassword1">Address2</label>
                  <textarea class="form-control" name="address2">{{old('address2')}}</textarea>
                  </div>
                  <div class="form-group">
                  <label for="exampleInputPassword1">Address3</label>
                  <textarea class="form-control" name="address3">{{old('address3')}}</textarea>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">City</label>
                    <input type="text" name="city" class="form-control" id="city" placeholder="City" value="{{old('city')}}">
                     @if($errors->has('city'))
                    <label><small style="color:red">{{$errors->first('city')}}</small></label>
                    @endif
                  </div>
                   <div class="form-group">
                    <label for="exampleInputPassword1">Mobile</label>
                    <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Mobile" value="{{old('mobile')}}">
                     @if($errors->has('mobile'))
                    <label><small style="color:red">{{$errors->first('mobile')}}</small></label>
                    @endif
                  </div>

                  <div class="form-group">
                    <label for="exampleInputPassword1">SkypeId</label>
                    <input type="text"  class="form-control" name="skype" id="skype" placeholder="SkypeId" value="{{old('skype')}}">
                  </div>

                
                </div>
                <!-- /.card-body -->
                @if($numofmem >=5)
                <div class="card-footer">
                  <button type="button" class="btn btn-primary" onclick="message()" >Submit</button>
                </div>
                @else
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                @endif
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
    function message(){
      alert("you can't add more member");
    }
  </script>