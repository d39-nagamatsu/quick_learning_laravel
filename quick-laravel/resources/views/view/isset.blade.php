<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>速習Laravel</title>
</head>
<body>
{{-- 
@isset($msg)
  <p>変数msgは「{{ $msg }}」です。</p>
@endisset
 --}}
 
{{-- 
@empty($msg)
  <p>メッセージがありません！</p>
@endempty
 --}}

@isset($msg)
  <p>変数msgは「{{ $msg }}」です。</p>
@else
  <p>メッセージがありません！</p>
@endisset
</body>
</html>