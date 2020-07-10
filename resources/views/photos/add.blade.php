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

	<center><h3 style="color: white;">Tambah Data Photos</h3></center>
	<br>
	<form action="{{ url('/photos') }}" method="POST">
		@csrf
		<table class="table table-bordered">
			<tr class="bg-info">
				<td style="color: white;">DATE</td>
				<td><input type="date" name="photo_date" placeholder="Date Photo"></td>
			</tr>
			<tr class="bg-info">
				<td style="color: white;">TITLE</td>
				<td><input type="file" name="photo_title" placeholder="Title Photo"></td>
			</tr>
			<tr class="bg-info">
				<td style="color: white;">TEXT</td>
				<td><textarea name="photo_text" placeholder="Text Photo"></textarea></td>
			</tr>
			<tr class="bg-info">
				<td style="color: white;">POST</td>
				<td><input type="text" name="post_id" placeholder="ID Post"></td>
			</tr>
			<tr class="bg-info">
				<td></td>
				<td><input type="submit" value="SIMPAN" class="btn btn-dark"></td>
			</tr>
		</table>
	</form>
</div>

@endsection