@extends('layouts.app')

@section ('content')
<div class="main-wrap">
  <div class="container">
    <h2>投稿作成</h2>
    {!! Form::open(['route' => 'post.store']) !!}
      <div class="form-group form-size-small @if($errors->has('content')) has-error @endif">
        {!! Form::textarea('content', null, ['required', 'class' => 'form-control', 'placeholder' => 'Content', 'cols' => 50, 'rows' => 10]) !!}
        @if ($errors->has('content'))
          <span class="help-block">{{ $errors->first('content') }}</span>
        @endif
      </div>
      {!! Form::button('Add', ['type' => 'submit', 'class' => 'btn btn-success pull-right']) !!}
    {!! Form::close() !!}
  </div>
</div>
@endsection