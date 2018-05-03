@extends('layout')
@section('title','form Category') 
<!--  -->
@section('content')
	{{ Form::open(['url'=>'category'])}}

	<table class="table table-bordered">
		<tr><td>Name</td>
			<td>
				{{ Form::text('name',null,['class'=>'form-control'])}}
			</td>
		</tr>
		<tr>
			<td></td>
			<td>
				{{ Form::submit('Save',['class'=>'btn btn-danger btn-sm'])}}
			</td>
		</tr>
	</table>
	{{ Form::close()}}
@endsection
