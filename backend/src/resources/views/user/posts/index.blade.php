@extends('layouts.app')

@section ('content')
<div class="main-wrap">
  <div class="container">
    <h2>一覧画面</h2>
    <div class="card-container">

      @foreach ($posts as $post)
        <div class="card" style="width: 18rem">
          <div class="card-body">
            <h5>{{ $post->user->name }}</h5>
            <p>{{ $post->index_content }}</p>
            <p class="time-stamp">{{ $post->updated_at }}</p>
          </div>
        </div>
      @endforeach
    </div>

    <pre>
      {{ var_dump($posts) }}
    </pre>
  </div>
</div>
@endsection