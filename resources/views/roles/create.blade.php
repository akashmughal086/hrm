{{-- \resources\views\users\create.blade.php --}}
@extends('layouts.master')

@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
	
	 <section class="content">
	 <div class="container-fluid">
        <div class="row">
       <!-- left column -->
	             <div class="col-md-12">
		  @if ($errors->any())
			<div class="alert alert-danger">
				<strong>Whoops!</strong> There were some problems with your input.<br><br>
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif
  <!-- general form elements -->
            <div class="card card-primary">
<div class="card-header">
                <h3 class="card-title"><i class='fa fa-key'></i> Add Role</h3>
              </div>
   <div class="card-body">

     {{ Form::open(array('url' => 'roles')) }}

    <div class="form-group">
{{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>

   
    <h5><b>Assign Permissions</b></h5>

    <div class='form-group'>
        @foreach ($permissions as $permission)
            {{ Form::checkbox('permissions[]',  $permission->id ) }}
            {{ Form::label($permission->name, ucfirst($permission->name)) }}<br>

        @endforeach
    </div>




   

  {{ Form::submit('Add', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}
	</div>
	</div>
	</div>

</div>
</div>
</div>
@endsection