<div class="row">
    {!! Form::label('name', 'Name:', array('class' => 'col-sm-2')) !!}
    {!! Form::text('name', null, array('class' => 'col-sm-10')) !!}
</div>
<div class="row">
    {!! Form::label('slug', 'Slug:', array('class' => 'col-sm-2')) !!}
    {!! Form::text('slug', null, array('class' => 'col-sm-10')) !!}
</div>
<div class="row">
    {!! Form::submit($submit_text, ['class'=>'btn btn-primary']) !!}
</div>