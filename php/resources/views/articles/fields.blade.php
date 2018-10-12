<!-- Name, Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name,:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Text, Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('body', 'Text,:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('articles.index') !!}" class="btn btn-default">Cancel</a>
</div>
