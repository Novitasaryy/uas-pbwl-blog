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

	<center><h3 style="color: white;">Edit Data Album</h3></center>
	<form action="{{ url('/album/' . $row->album_id) }}" method="POST">
	<br>
		<input type="hidden" name="_method" value="PATCH">
		@csrf
		<table class="table table-bordered">
			<tr class="bg-info">
				<td style="color: white;">NAMA</td>
				<td><input type="text" name="album_name" placeholder="Nama Album" value="{{ $row->album_name }}"></td>
			</tr>
			<tr class="bg-info">
				<td style="color: white;">TEXT</td>
				<td><input type="text" name="album_text" placeholder="Text Album" value="{{ $row->album_text }}"></td>
			</tr>
			<tr class="bg-info">
				<td style="color: white;">PHOTO</td>
				<td><input type="text" name="photo_id" placeholder="ID Photo" value="{{ $row->photo_id }}"></td>
			</tr>
			<tr class="bg-info">
				<td></td>
				<td><input type="submit" value="UPDATE" class="btn btn-dark"></td>
			</tr>
		</table>
	</form>
</div>

@endsection