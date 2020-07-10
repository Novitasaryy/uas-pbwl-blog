@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html>
<head>
	<style>
            html, body {
                background-color: #E9967A;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
    </style>
</head>
<body>

</body>
</html>

<div class="container">

	<center><h3 style="color: white;">Daftar Photos</h3></center>
	<br>
	<center><button type="button" class="btn btn-info"><a href="{{ url('photos/create') }}" style="color: white;">Tambah Data</a></button></center>
	<br>

	<table class="table table-bordered">
		<tr align="center" class="bg-info" style="color: white;">
			<td>DATE</td>
			<td>TITLE</td>
			<td>TEXT</td>
			<td>POST</td>
			<td>EDIT</td>
			<td>HAPUS</td>
		</tr>

		@foreach($photos as $row)
		<tr align="center">
			<td>{{ $row->photo_date }}</td>
			<td>{{ $row->photo_title }}</td>
			<td>{{ $row->photo_text }}</td>
			<td>{{ $row->post->post_slug }}</td>
			<td>
				<button type="button" class="btn btn-info btn-sm"><a href="{{ url('photos/' . $row->photo_id . '/edit') }}" style="color: white;">Edit</a></button>
			</td>
			<td>
				<form action="{{ url('photos/' . $row->photo_id) }}" method="POST">
				<input type="hidden" name="_method" value="DELETE">
				@csrf
				<button type="button" class="btn btn-dark btn-sm">Hapus</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
</div>

@endsection