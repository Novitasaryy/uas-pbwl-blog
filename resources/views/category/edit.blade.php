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

	<center><h3 style="color: white;">Edit Data Category</h3></center>
	<form action="{{ url('/category/'. $row->cat_id) }}" method="POST">
	<br>
		<input name="_method" type="hidden" value="PATCH">
		@csrf
		<table class="table table-bordered">
			<tr class="bg-info">
				<td style="color: white;">NAMA</td>
				<td><input type="text" name="cat_name" placeholder="Nama Category" value="{{ $row->cat_name }}"></td>
			</tr>
			<tr class="bg-info">
				<td style="color: white;">TEXT</td>
				<td><input type="" name="cat_text" placeholder="Text Category" value="{{ $row->cat_text }}"></td>
			</tr>
			<tr class="bg-info">
				<td></td>
				<td><input type="submit" value="UPDATE" class="btn btn-dark"></td>
			</tr>
		</table>
	</form>
</div>

@endsection