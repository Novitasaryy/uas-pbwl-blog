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

	<center><h3 style="color: white;">Tambah Data Post</h3></center>
	<br>
	<form action="{{ url('/post') }}" method="POST">
		@csrf
		<table class="table table-bordered">
			<tr class="bg-info">
				<td style="color: white;">DATE</td>
				<td><input type="date" name="post_date" placeholder="Date Post"></td>
			</tr>
			<tr class="bg-info">
				<td style="color: white;">SLUG</td>
				<td><input type="text" name="post_slug" placeholder="Slug Post"></td>
			</tr>
			<tr class="bg-info">
				<td style="color: white;">TITLE</td>
				<td><input type="text" name="post_title" placeholder="Title Post"></td>
			</tr>
			<tr class="bg-info">
				<td style="color: white;">TEXT</td>
				<td><textarea name="post_text" placeholder="Text Post"></textarea></td>
			</tr>
			<tr class="bg-info">
				<td style="color: white;">CATEGORY</td>
				<td><input type="text" name="cat_id" placeholder="ID Category"></td>
			</tr>
			<tr class="bg-info">
				<td></td>
				<td><input type="submit" value="SIMPAN" class="btn btn-dark"></td>
			</tr>
		</table>
	</form>
</div>

@endsection