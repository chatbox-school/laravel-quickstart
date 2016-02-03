@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="col-sm-offset-3 col-sm-6">
			<div class="panel panel-default">
				<div class="panel-heading text-center">
					<strong>LOGIN</strong>
				</div>

				<div class="panel-body">
					<!-- Display Validation Errors -->
					@include('common.errors')

							<!-- New Task Form -->
					<form action="/auth/login" method="POST" class="form-horizontal">
						{{ csrf_field() }}

								<!-- Task Name -->
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

						<!-- Add Task Button -->
						<div class="form-group">
							<div class="col-sm-offset-3 col-sm-6">
								<button type="submit" class="btn btn-default">
									<i class="glyphicon glyphicon-ok"></i> &nbsp; LOGIN
								</button>
							</div>
						</div>
					</form>

				</div>
			</div>

		</div>
	</div>
@endsection
