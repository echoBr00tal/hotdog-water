<div class="form-group">
    {!! Form::label('title', '*Title') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('blog_category_id', '*Blog Category: ') !!}
    {!! Form::select('blog_category_id',$blog_categories) !!}
</div>

<div class="form-group">
    {!! Form::label('published', '*Publish On: ') !!}
    {!! Form::input('date', 'published', date('Y-m-d'), ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('body', '*Body') !!}
    {!! Form::textArea('body', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('summary', '*Summary') !!}
    {!! Form::textArea('summary', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit($buttonText, ['class' => 'btn btn-primary form-control']) !!}
</div>