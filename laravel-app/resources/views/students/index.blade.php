@extends('template/main')

@section('judul','Daftar Students')
@section('container')
<div class="container">
	<div class="row">
		<div class="col-10">
			<h1>Daftar Students</h1>
			<table class="table">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">Nama</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php $i=1; ?>
			  	@foreach ($students as $student )
			    <tr>
			      <th scope="row"><?= $i++; ?></th>
			      <td>{{$student->nama}}</td>
			      <td>
			      	<a href="{{url('students/'.$student->id)}}" class="badge badge-success">show detail</a>
			      </td>
			    </tr>
			  @endforeach
			  </tbody>
		</table>
		</div>
	</div>
</div>
@endsection

