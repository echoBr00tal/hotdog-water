@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Contact Us</div>
				<div class="panel-body">
					
					<form class="form-horizontal" role="form" method="POST" action="{{ url('/') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
                                                <div class="form-group">
							<label class="col-md-4 control-label">Name</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name" value="{{ old('name') }}">
							</div>
						</div>
						
                                                <div class="form-group">
							<label class="col-md-4 control-label">E-Mail Address</label>
							<div class="col-md-6">
								<input type="email" class="form-control" name="email" value="{{ old('email') }}">
							</div>
						</div>
                                                
                                                <div class="form-group">
							<label class="col-md-4 control-label">Questions/Comments</label>
							<div class="col-md-6">
                                                            <textarea cols="5" rows="5" name="comments" class="form-control"></textarea>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Submit</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection


