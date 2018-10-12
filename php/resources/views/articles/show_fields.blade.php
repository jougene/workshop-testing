<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $article->id !!}</p>
</div>

<!-- Name, Field -->
<div class="form-group">
    {!! Form::label('name,', 'Name,:') !!}
    <p>{!! $article->name !!}</p>
</div>

<!-- Text, Field -->
<div class="form-group">
    {!! Form::label('text,', 'Text,:') !!}
    <p>{!! $article->body !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $article->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $article->updated_at !!}</p>
</div>

