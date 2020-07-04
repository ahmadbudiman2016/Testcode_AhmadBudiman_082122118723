@extends('layout.master')
@section('title', 'Edit Data Menu Restoran')

@section('content')
	<div class="main">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-8">
					<hr>
					<div class="panel">
						<div class="panel-heading">
							<h3>Ubah Data Menu Restoran</h3>
						</div>
						<div class="panel-body">
							<form action="/menu/{{$menu->id}}}/update" method="POST" enctype="multipart/form-data">
				        	{{csrf_field()}}
				        	{{ method_field('POST') }}
						 	<div class="form-group">
							    <label for="exampleInputEmail1">Kode Jenis</label>
							    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{$menu->kode_jenis}}" name="kode_jenis" placeholder="Kode Jenis">
							    @error('kode_jenis')
							    <div class="invalid-feedback">
						        {{$message}}
					      	</div>    
					      	@enderror
						  </div>
						  <div class="form-group">
						    <label for="exampleFormControlTextarea1">Nama</label>
						    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{$menu->nama}}" name="nama" placeholder="Nama Menu">
						    @error('nama')
						    <div class="invalid-feedback">
					        {{$message}}
					      	</div>    
					      	@enderror
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Harga</label>
						    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$menu->harga}}" name="harga" placeholder="Harga">
						    @error('harga')
						    <div class="invalid-feedback">
					        {{$message}}
					      	</div>    
					      	@enderror
						  </div>
						  <div class="form-group">
						  	<label for="inputGroupSelect01">Pilih Status</label>
						  	<select name="status" class="form-control" id="exampleFormControlSelect1">
						  		<option value="Ready">Ready</option>
						  		<option value="Not Ready">Not Ready</option>
						  	</select>
						  </div>
						<button type="submit" class="btn btn-warning">Update</button>
						</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop
@section('content1')
  			