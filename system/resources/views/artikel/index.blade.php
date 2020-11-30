@extends('admin.base')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Daftar Artikel
						<a href="{{url('admin/artikel/create')}}" class="btn btn-dark float-right"><i class="fas fa-plus"></i>  Tambah</a>
					</div>
					<div class="card-body">
						<table class="table table-datatable">
							<thead>
								<th>NO</th>
								<th>Aksi</th>
								<th>Judul</th>
								<th>Sumber</th>
							</thead>
							<tbody>
								@foreach($list_artikel as $artikel)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>
										<div class="btn-group">
											<a href="{{url('admin/artikel', $artikel->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
											<a href="{{url('admin/artikel', $artikel->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
											<form action="{{url('admin/artikel', $artikel->id)}}" method="post" class="form-inline" onsubmit="return confirm('Yakin akan menghapus data ini???')">
												@csrf
												@method("delete")
												<button class="btn btn-danger"><i class="fa fa-trash"></i></button>
											</form>	
										</div>
									</td>
									<td>{!! nl2br($artikel->judul) !!}</td>
									<td>{!! nl2br($artikel->sumber) !!}</td>
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