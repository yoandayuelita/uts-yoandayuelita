@extends('admin.base')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Tambah Artikel
					</div>
					<div class="card-body">
						<form action="{{url('admin/artikel')}}" method="post">
							@csrf
							<div class="form-group">
								<label for="" class="control-label">Judul</label>
								<input type="text" class="form-control" name="judul">
							</div>
							<div class="form-group">
								<label for="" class="control-label">Sumber</label>
								<input type="text" class="form-control" name="sumber">
							</div>
							<div class="form-group">
								<label for="" class="control-label">Gambar</label>
								<input type="file" class="form-control" name="gambar">
							</div>
							<div class="form-group">
								<label for="" class="control-label">Artikel</label>
								<textarea class="form-control" name="artikel"></textarea>
							</div>
							<button class="btn btn-dark float-right">Simpan</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection