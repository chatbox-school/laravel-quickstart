@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="col-sm-offset-3 col-sm-6">
			<div class="panel panel-default">
				<div class="panel-heading text-center">
					<strong>REGISTRATION</strong>
				</div>

				<div class="panel-body">
					<!-- Display Validation Errors -->
					@include('common.errors')

							<!-- New Task Form -->
					<form action="/auth/register" method="POST" class="form-horizontal">
						{{ csrf_field() }}

								<!-- Task Name -->
						<div class="form-group">
							<label for="task-name" class="col-sm-3 control-label">NAME</label>

							<div class="col-sm-6">
								<input type="text" name="name" id="task-name" class="form-control" value="{{ old('name') }}">
							</div>
						</div>
						<div class="form-group">
							<label for="task-name" class="col-sm-3 control-label">LOGIN ID</label>

							<div class="col-sm-6">
								<input type="email" name="email" id="task-name" class="form-control" value="{{ old('email') }}">
							</div>
						</div>
						<div class="form-group">
							<label for="task-name" class="col-sm-3 control-label">PASSWORD</label>

							<div class="col-sm-6">
								<input type="password" name="password" id="task-name" class="form-control" value="{{ old('password') }}">
							</div>
						</div>
						<div class="form-group">
							<label for="task-name" class="col-sm-3 control-label">PASSWORD(:RE)</label>

							<div class="col-sm-6">
								<input type="password" name="password_confirmation" id="task-name" class="form-control" value="{{ old('password_confirmation') }}">
							</div>
						</div>

						<!-- Add Task Button -->
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-6">
								<button type="submit" class="btn btn-default">
									<i class="glyphicon glyphicon-ok"></i> &nbsp; REGISTER
								</button>
							</div>
						</div>
					</form>

				</div>
			</div>

		</div>
	</div>
@endsection
