<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="widht=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie-edge">

	<title>Export PDF</title>
</head>
<body>
<table border="1">
	<thead>
	<tr>
		<th>ID</th>
		<th>Nama</th>
		<th>Email</th>
	</tr>
	</thead>
	<tbody>
		@foreach($contacts as $contact)
			<tr>
				<td>{{ $contact->id }}</td>
				<td>{{ $contact->name }}</td>
				<td>{{ $contact->email }}</td>
			</tr>
		@endforeach

	</tbody>
</table>
</body>
</html>