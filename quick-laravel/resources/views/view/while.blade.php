<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>速習Laravel</title>
</head>
<body>
@php
  $i = 0;
@endphp
@while($i < 6)
  @php
    $i++;
  @endphp
  <h{{ $i }}>{{ $i }}番目です。</h{{ $i }}>
@endwhile
</body>
</html>