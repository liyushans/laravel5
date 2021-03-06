@extends('app')
@section('content')
  <h1>撰写新文章</h1>
  {!! Form::open(['url' => '/articles']) !!}
    <div class="form-group">
    {!! Form::label('title') !!}
    {!! Form::text('title',null,['class'=>'form-control']) !!}{{--null为默认数据为空--}}
    </div>

  <div class="from-group">
    {!! Form::label('content','Content:') !!}
    {!! Form::textarea('content',null,['class' => 'form-control']) !!}
  </div>
  <br>
  {!! Form::submit('发表文章',['class'=> 'btn btn-primary form-control']) !!}
  {!! Form::close() !!}
@stop