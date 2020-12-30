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
		  <a href="{{ URL::to('roles/create') }}" class="btn btn-default">Add Role</a>
					  <a href="{{ route('permissions.index') }}" class="btn btn-default pull-right">Permissions</a>
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
               
                <h3 class="card-title">Roles</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                     <th>Role</th>
                    <th>Permissions</th>
                    <th>Operation</th>
                  </tr>
                  </thead>
                  <tbody>
                @foreach ($roles as $role)
                <tr>

                      <td>{{ $role->name }}</td>

                    <td>{{ str_replace(array('[',']','"'),'', $role->permissions()->pluck('name')) }}</td>{{-- Retrieve array of permissions associated to a role and convert to string --}}
                    {{-- <td>
                    <a href="{{ URL::to('roles/'.$role->id.'/edit') }}" class="btn btn-info pull-left">Edit</a>

                   {!! Form::open(['method' => 'DELETE', 'route' => ['roles.destroy', $role->id] ]) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                    {!! Form::close() !!}

                    </td> --}}
                    <td>

                      <form action="{{ route('roles.destroy',$role->id) }}" method="POST">
   
                        <a class="btn btn-info" href="{{  URL::to('roles/'.$role->id.'/edit') }}">Edit</a>
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