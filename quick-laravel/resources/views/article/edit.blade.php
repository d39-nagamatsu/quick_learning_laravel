@extends('layouts.base')
@section('title', '記事情報フォーム（編集）')
@section('main')
<p>edit</p>
<form method="POST" action="/articles/1">
  @csrf
  @method('PATCH')
  <input type="submit" value="更新" />
@endsection