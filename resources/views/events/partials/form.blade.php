<div class="form-group">
	{!! Form::label('title', '*Title') !!}
	{!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('description', '*Body') !!}
	{!! Form::textArea('description', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('private', 'Private') !!}
	{!! Form::checkbox('private', 'private', true, ['class' => 'checkbox-inline']) !!}
</div>
<div class="form-group">
	{!! Form::label('num_guests', '*Total Number of Guests') !!}
	{!! Form::text('num_guests', null, ['class' => 'form-control', 'style' => 'width:100px;']) !!}
</div>
<div class="form-group">
	{!! Form::label('event_date', '*Date of the Event') !!}
	{!! Form::input('date', 'event_date', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label('due_by_date', '*RSVP By') !!}
	{!! Form::input('date', 'due_by_date',  null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::submit($buttonText, ['class' => 'btn btn-primary form-control']) !!}
</div>