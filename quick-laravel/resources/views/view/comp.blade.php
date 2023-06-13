@extends('layouts.base')
@section('title', '共通レイアウトの基本')
@section('main')

  <x-my-alert type="success" :alert-title="$title">
    コンポーネントは普通のビューと同じように.blade.phpファイルで定義できます！
  </x-my-alert>

  {{--
  <x-my-alert type="success" :alert-title="$title">
    コンポーネントは普通のビューと同じように.blade.phpファイルで定義できます！
    <x-slot:footer>
      フッターテキスト
    </x-slot>
  </x-my-alert>
  --}}

  {{--
  <x-dynamic-component :component="$comp" type="success" :alert-title="$title">
    コンポーネントは普通のビューと同じように.blade.phpファイルで定義できます！
  </x-dynamic-component>
  --}}

  {{--
  @include('components.my-alert', [
    'type' => 'success',
    'alertTitle' => 'はじめてのコンポーネント',
    'slot' => 'コンポーネントは普通のビューと同じように.blade.phpファイルで定義できます！',
  ])
  --}}
@endsection

