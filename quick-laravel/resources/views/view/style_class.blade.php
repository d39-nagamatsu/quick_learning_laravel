<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>速習Laravel</title>
</head>
<body>
<div @class([
  'column',
  'notice' => $isEnabled,
  'example' => !$isEnabled,
])>classディレクティブ</div>
</body>
</html>