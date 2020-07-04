@extends('layout.master')
@section('title', 'Data Menu Restoran')
@section('content')
	<div class="main">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<hr>
					<div class="panel-body">
						<form class="navbar-form navbar-left" method="get" action="/rumahsakit">
							<h2>Data Karyawan yang Aktif Hari Ini</h2>
						</form>
							<table class="table table-hover table-responsive">
								<thead>
									<tr>
										<th>#</th>
										<th>Id</th>
										<th>Nama</th>
										<th>ALamat</th>
										<th>No Telepon</th>
										<th>Role</th>
										<th>Status</th>
									</tr>
								</thead>
									@foreach($pelayan as $pelayan_resotran)
									<tbody>
										<tr>
											<td><a href=""><span class="fa fa-eye"></span></a></td>
											<td>{{$pelayan_resotran->id}}</td>
											<td>{{$pelayan_resotran->nama}}</td>
											<td>{{$pelayan_resotran->alamat}}</td>
											<td>{{$pelayan_resotran->no_tlp}}</td>
											<td>{{$pelayan_resotran->role}}</td>
											<td>{{$pelayan_resotran->status}}</td>
										</tr>
									@endforeach
									</tbody>
							</table>
						</div>
				</div>
			</div>
		</div>
@stop	