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
          <div class="col-sm-6">
            <a href="{{ route('profile.edit')}}" class="btn btn-default pull-right">Edit Profile</a>
            <a href="/changepassword" class="btn btn-default">Change Password</a>
          
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
               
                <h3 class="card-title">Profile</h3>
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
                  <div class="md:flex md:items-center mb-4">
                      <div class="md:w-1/3">
                          <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                              Name : 
                          </label>
                          <span class="block text-gray-600 font-bold">{{ auth()->user()->name }}</span>
                      </div>
            
                  </div>
                  <div class="md:flex md:items-center mb-4">
                      <div class="md:w-1/3">
                          <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                              Email :
                          </label>
                          <span class="text-gray-600 font-bold">{{ auth()->user()->email }}</span>
                      </div>
                      
                  </div>
                  <div class="md:flex md:items-center mb-4">
                      <div class="md:w-1/3">
                          <label class="block text-gray-500 font-bold md:text-right mb-1 md:mb-0 pr-4">
                              Role :
                          </label>
                          <span class="text-gray-600 font-bold"> {{ auth()->user()->roles[0]->name ?? '' }}</span>
                      </div>
                    
                  </div>
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