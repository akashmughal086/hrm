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
		  <a href="{{ URL::to('permissions/create') }}" class="btn btn-default pull-right">Add Permission</a>
		     <a href="{{ route('roles.index') }}" class="btn btn-default pull-right">Roles</a>
		<a href="{{ route('users.index') }}" class="btn btn-default pull-right">Users</a>
     
			
          
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
               
                <h3 class="card-title"><i class="fa fa-key"></i> Available Permissions</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                  <th>Permissions</th>
                    <th>Operation</th>
                  </tr>
                  </thead>
                  <tbody>
               @foreach ($permissions as $permission)
                <tr>

                      <td>{{ $permission->name }}</td> 

                    
                  
                    
					        <td>

                      <form action="{{ route('permissions.destroy', $permission->id) }}" method="POST">
   
                        <a class="btn btn-info" href="{{ URL::to('permissions/'.$permission->id.'/edit') }}">Edit</a>
                        @csrf
                        @method('DELETE')
          
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>     
                </table>
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