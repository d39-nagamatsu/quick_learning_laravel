<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>速習Laravel</title>
</head>
<body>
@unless($random === 50)
  <p>{{ $random }}は、50ではありません！</p>
@endunless
</body>
</html>