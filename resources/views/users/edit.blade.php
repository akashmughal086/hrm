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
                <h3 class="card-title"><i class='fa fa-user-plus'></i> Edit {{$user->name}}</h3>
              </div>
   <div class="card-body">

    {{ Form::model($user, array('route' => array('users.update', $user->id), 'method' => 'PUT')) }}{{-- Form model binding to automatically populate our fields with user data --}}

    <div class="form-group">
          {{ Form::label('name', 'Name') }}
        {{ Form::text('name', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
       {{ Form::label('email', 'Email') }}
        {{ Form::email('email', null, array('class' => 'form-control')) }}
    </div>

    <div class='form-group'>
	   {{ Form::label('Give Role') }}
	   <br>
         @foreach ($roles as $role)
            {{ Form::checkbox('roles[]',  $role->id, $user->roles ) }}
            {{ Form::label($role->name, ucfirst($role->name)) }}<br>

        @endforeach
    </div>

    <div class="form-group">
      {{ Form::label('password', 'Password') }}<br>
        {{ Form::password('password', array('class' => 'form-control')) }}

    </div>

    <div class="form-group">
         {{ Form::label('password', 'Confirm Password') }}<br>
        {{ Form::password('password_confirmation', array('class' => 'form-control')) }}

    </div>

 {{ Form::submit('Edit', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}
	</div>
	</div>
	</div>

</div>
</div>
</div>
@endsection