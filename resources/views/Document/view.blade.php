<!DOCTYPE html>
<html>
<head>
	<title>View</title>
</head>
<body>

<table border="1">
	<tr>
		<th>id</th>
		<th>FormJuridique</th>
		<th>DateExperation</th>
		<th>benifice</th>
		<th>ville</th>
		<th>view</th>
		<th>Download</th>
	</tr>
	@foreach($cns as $cn)
	<tr>
		<td>{{ $cn->id }}</td>
		<td>{{ $cn->FormJuridique }}</td>
		<td>{{ $cn->bénificier }}</td>
		<td>{{ $cn->dateExpération }}</td>
		<td>{{ $cn->ville }}</td>
		<td><a href="/file/{{$cn->id}}">View</a></td>
		<td><a href="{{ asset('/storage/'.$cn->pdf) }}">Download</a></td>
	</tr>
	@endforeach
</table>
</body>
</html>