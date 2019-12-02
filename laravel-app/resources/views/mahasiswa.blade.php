@extends('template/main')

@section('judul','Rekayasa Web')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1>Data Mahasiswa</h1>
            <?php foreach ($mahasiswa as $m):      	 ?>
            	<li><?= $m['nama'] ?></li>
            <?php endforeach ?>
        </div>
    </div>
</div>
@endsection