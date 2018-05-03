@extends('layout')
@section('content')
	
	<table class="table table-bordered">
	<tr>
		<th width="10">No</th>
		<th>Category Name</th>
		<th width="60">Action</th>
	</tr>

	@foreach ($categories as $category)
	<tr>
		<td>{{ $loop->iteration}}</td>
		<td>{{ $category->name}}</td>
		<td>
			{{ link_to('category/'.$category->id.'/edit','Edit',
			['class'=>'btn btn-danger btn-sm'])}}
		</td>
	</tr>
	@endforeach
	</table>