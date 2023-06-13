<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8" />
<title>速習Laravel</title>
</head>
<body>
@foreach($member as $key => $value)
  <li>{{$key}}：{{$value}}</li>
@endforeach
</body>
</html>