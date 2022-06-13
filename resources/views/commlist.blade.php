@extends('layouts.app')

@section('content')
    <h2>Comments</h2>
    @foreach($comments as $comment)
    <div class="comments">
      <div class="comm_info">
        <span>{{$comment->user->name}}</span>
        <span>{{$comment->created_at}}</span>
      </div>
      <div class="comm_text">
        {{$comment->comm_text}}
      </div>
    </div>
    @endforeach
    @endsection