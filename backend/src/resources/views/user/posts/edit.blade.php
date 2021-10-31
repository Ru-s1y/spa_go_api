@extends('layouts.app')

@section ('content')
<div class="main-wrap">
  <div class="container">
    <h2>投稿編集</h2>
    {!! Form::open(['route' => ['post.update', $post->id], 'method' => 'put']) !!}
      <div class="form-group @if($errors->has('content')) has-error @endif">
        {!! Form::textarea('content', $post->content, ['class' => 'form-control', 'placeholder' => 'Content', 'cols' => 50, 'rows' => 10]) !!}
        @if ($errors->has('content'))
          <span class="help-block">{{ $errors->first('content') }}</span>
        @endif
      </div>
      {!! Form::button('Update', ['type' => 'submit', 'class' => 'btn btn-success pull-right']) !!}
    {!! Form::close() !!}
  </div>
</div>
@endsection