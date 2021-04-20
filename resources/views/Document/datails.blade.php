<!DOCTYPE html>
<html>
<head>
	<title>Details</title>
</head>
<body>
<h2>{{ $cns->bénificier }}</h2>
<h3> {{ $cns->ville  }} </h3>
<p>
	<a href="{{ asset('/storage/'.$cns->pdf) }}">Download</a>
	<iframe src="{{ asset('/storage/'.$cns->pdf) }}" width="50%" height="500%"></iframe>
</p>
</body>
</html>