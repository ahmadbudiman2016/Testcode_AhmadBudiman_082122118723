@extends('layout.master')
@section('title', 'Data Meja')
@section('content')
	<div class="main">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<hr>
					<div class="panel">
						<button type="button" class="btn btn-primary" style="margin: 20px 20px 0px 40px" data-toggle="modal" data-target="#exampleModal" >Tambah Data Meja</button>
					<div class="panel-body">
						<form class="navbar-form navbar-left" method="get" action="/rumahsakit">
							<div class="input-group">
								<input name="cari" type="text" value="" class="form-control" placeholder="Cari Menu">
								<span class="input-group-btn"><button type="submit" class="btn btn-primary">Go</button></span>
							</div>
						</form>
							<table class="table table-hover table-responsive">
								<thead>
									<tr>
										<th>#</th>
										<th>Id</th>
										<th>Nama</th>
										<th>No Meja</th>
										<th>Jumlah Kursi</th>
										<th>Status</th>
										<th colspan="2">Aksi</th>
									</tr>
								</thead>
									@foreach($meja as $meja_pelanggan)
									<tbody>
										<tr>
											<td><a href=""><span class="fa fa-eye"></span></a></td>
											<td>{{$meja_pelanggan->id}}</td>
											<td>{{$meja_pelanggan->nama}}</td>
											<td>{{$meja_pelanggan->no_meja}}</td>
											<td>{{$meja_pelanggan->jumlah_kursi}}</td>
											<td>{{$meja_pelanggan->status}}</td>
											<td>
												<a href="/menu/{{$meja_pelanggan->id}}/edit" class="btn btn-warning btn-sm float-left">Edit</a>
											</td>
											<td>
												<a href="/menu/{{$meja_pelanggan->id}}/delete" class="btn btn-danger btn-sm float-right" onclick="return confirm('Yakin Mau di hapus ?')">Delete</a>
												
											</td>
										</tr>
									@endforeach
									</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Tambah Menu</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				        <form action="/menu/create" method="POST">
				        	{{csrf_field()}}
				        	{{ method_field('POST') }}
						  <div class="form-group">
						    <label for="exampleInputEmail1">Kode Jenis</label>
						    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{old('kode_jenis')}}" name="kode_jenis" placeholder="Kode Jenis">
						    @error('kode_jenis')
						    <div class="invalid-feedback">
					        {{$message}}
					      	</div>    
					      	@enderror
						  </div>
						  <div class="form-group">
						    <label for="exampleFormControlTextarea1">Nama</label>
						    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{old('nama')}}" name="nama" placeholder="Nama Menu">
						    @error('nama')
						    <div class="invalid-feedback">
					        {{$message}}
					      	</div>    
					      	@enderror
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Harga</label>
						    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{old('harga')}}" name="harga" placeholder="Harga">
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
						  <div class="modal-footer">
					        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Submit</button>
					      </div>
						</form>
				      </div>
				      
				    </div>
				  </div>
				</div>
  			</div>
  			<!-- modal end -->
@stop	