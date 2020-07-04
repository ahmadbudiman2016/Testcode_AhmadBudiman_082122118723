@extends('layout.master')
@section('title', 'Data Menu Restoran')
@section('content')
	<div class="main">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<hr>
					<div class="panel">
						<button type="button" class="btn btn-primary" style="margin: 20px 20px 0px 40px" data-toggle="modal" data-target="#exampleModal" >Tambah Menu</button>
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
										<th>Jenis Menum Makanan</th>
										<th>Deskripsi</th>
										<th colspan="2">Aksi</th>
									</tr>
								</thead>
									@foreach($JenisMenu as $JenisMenu_makanan)
									<tbody>
										<tr>
											<td><a href=""><span class="fa fa-eye"></span></a></td>
											<td>{{$JenisMenu_makanan->id}}</td>
											<td>{{$JenisMenu_makanan->jenis}}</td>
											<td>{{$JenisMenu_makanan->deskripsi}}</td>
											<td>
												<a href="/jenisMenu/{{$JenisMenu_makanan->id}}/edit" class="btn btn-warning btn-sm float-left">Edit</a>
											</td>
											<td>
												<a href="/jenisMenu/{{$JenisMenu_makanan->id}}/delete" class="btn btn-danger btn-sm float-right" onclick="return confirm('Yakin Mau di hapus ?')">Delete</a>
												
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
						    <label for="exampleInputEmail1">Jenis Menu Makanan</label>
						    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{old('kode_jenis')}}" name="jenis" placeholder="Jenis Menu Makanan">
						    @error('kode_jenis')
						    <div class="invalid-feedback">
					        {{$message}}
					      	</div>    
					      	@enderror
						  </div>
						  <div class="form-group">
						    <label for="exampleFormControlTextarea1">Deskripsi</label>
						    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"  value="{{old('deskripsi')}}" name="deskripsi" placeholder="deskripsi">
						    @error('deskripsi')
						    <div class="invalid-feedback">
					        {{$message}}
					      	</div>    
					      	@enderror
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