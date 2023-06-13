<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>速習Laravel</title>
</head>
<body>
@if($random < 50)
  <p>{{ $random }}は50未満です。</p>
@elseif($random < 70)
  <p>{{ $random }}は50以上70未満です。</p>  
@else
  <p>{{ $random }}は50以上です。</p>
@endif

@env('local')
  local環境
@endenv

</body>
</html>