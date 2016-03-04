@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Home</div>

				<div class="panel-body">
                                    <p>Yay homepage!</p>
                                    <p>Testing PULL</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		{!! Form::open() !!}
		<div class="form-group">
			{!! Form::label('textinput', 'Label:') !!} 
			{!! Form::text('textinput', null, ['class'=> 'form-control']) !!} 
		</div>
		
		{!! Form::close() !!}
	</div>
</div>
@endsection
