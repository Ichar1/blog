@extends('main')

@section('title', '| Login')

@section('content')

	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<form class="form" action="index.html" method="post">
				<div class="form-group">
						<label for="email">Email:</label>
						<input type="text" name="email" class="form-control" value="">
				</div>
				<div class="form-group">
					<label for="password">Password:</label>
					<input type="password" name="password" class="form-control" value="">
				</div>
			</form>
		</div>
	</div>
		</div>
	</div>

@endsection
