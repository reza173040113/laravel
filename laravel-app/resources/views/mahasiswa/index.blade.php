@extends('template/main')

@section('judul','Daftar Mahasiswa')
@section('container')
<div class="container">
	<div class="row">
		<div class="col-10">
			<h1>Daftar Mahasiswa</h1>
			<table class="table">
			  <thead class="thead-dark">
			    <tr>
			      <th scope="col">#</th>
			      <th scope="col">NRP</th>
			      <th scope="col">Nama</th>
			      <th scope="col">Email</th>
			      <th scope="col">Jurusan</th>
			      <th scope="col">Action</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php $i=1; ?>
			  	@foreach ($mahasiswa as $m )
			    <tr>
			    	
			      <th scope="row"><?= $i++; ?></th>
			      <td>{{$m->nrp}}</td>
			      <td>{{$m->nama}}</td>
			      <td>{{$m->email}}</td>
			      <td>{{$m->jurusan}}</td>
			      <td>
			      	<a href="{{url('/mahasiswa/update')}}" class="badge badge-success">Edit</a>
			      	<a href="" class="badge badge-danger">Delete</a>
			      </td>
			    </tr>

			  @endforeach
			  </tbody>
		</table>
		</div>
	</div>
</div>
@endsection

