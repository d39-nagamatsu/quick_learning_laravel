@extends('layouts.base')
@section('title', 'リレーションの基本')
@section('main')
<table class="table">
<tr>
  <th>出版社</th>
  <th>価格</th>
</tr>
@foreach ($records as $record) 
  <tr>
    <td>{{ $record->publisher }}</td>
    <td>{{ $record->price_avg }}円</td>
  </tr>
@endforeach
</table>
@endsection