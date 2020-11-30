@extends('admin.base')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Data Komentar
						<a href="{{url('admin/komentar/create')}}" class="btn btn-dark float-right"><i class="fas fa-plus"></i>  Tambah</a>
					</div>
					<div class="card-body">
						<table class="table table-datatable">
							<thead>
								<th>NO</th>
								<th>Aksi</th>
								<th>Nama</th>
								<th>Komentar</th>
							</thead>
							<tbody>
								@foreach($list_komentar as $komentar)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>
										<div class="btn-group">
											<a href="{{url('admin/komentar', $komentar->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
											<form action="{{url('admin/komentar', $komentar->id)}}" method="post" class="form-inline" onsubmit="return confirm('Yakin akan menghapus data ini???')">
												@csrf
												@method("delete")
												<button class="btn btn-danger"><i class="fa fa-trash"></i></button>
											</form>	
										</div>
									</td>
									<td>{!! nl2br($komentar->nama) !!})</td>
									<td>{!! nl2br($komentar->komentar) !!})</td>
								</tr>
								@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection