@extends('layouts.master');
@section('content');
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6 ">
            <a href="{{ route('profile') }}" class="btn btn-default pull-right">Back</a>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
		    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
            <div class="card">
              <div class="card-header">
               
                <h3 class="card-title">Change Password</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="{{ asset('images/profile/' . auth()->user()->profile_picture) }}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"></h3>

                <p class="text-muted text-center"></p>

                <div>
                  <form role="form" action="{{ route('profile.changepassword') }}" method="POST">
                    @csrf
					@method('PUT')
                      <div class="card-body">
                      <div class="form-group">
                          <label for="exampleInputEmail1">Current Password :</label>
                          <input type="password" class="form-control" name="currentpassword"id="exampleInputEmail1" autocomplete="off"required  placeholder="Current Password...">
                          @if(session('msg_currentpassword'))
                            <p class="text-red-500  italic" style="color:red">{{ session('msg_currentpassword') }}</p>
                        @endif
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">New Password :</label>
                          <input type="password" class="form-control" id="exampleInputEmail1" name="newpassword"autocomplete="off" required placeholder="New Password..." >
                          @error('newpassword')
                          <p class="text-red-500  italic" style="color:red">{{ $message }}</p>
                      @enderror
                        </div>
                           <div class="form-group">
                          <label for="exampleInputEmail1">Confirm New Password :</label>
                          <input type="password" class="form-control" name="newpassword_confirmation" id="exampleInputEmail1" autocomplete="off" placeholder="Confirm New Password..." >
                        </div>
                      </div>
                      <!-- /.card-body -->
      
                      <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Change Password</button>
                      </div>
					  
                    </form>
                  
                  
              </div>

               
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
  <!-- /.content-wrapper -->
  @endsection