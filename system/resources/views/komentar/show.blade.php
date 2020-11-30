@extends('admin.base')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Detail Komentar
						<a href="{{url('admin/komentar')}}" class="btn btn-dark float-right"><i class="fas fa-arrow-left"></i>  Kembali</a>

					</div>
					<div class="card-body">
						<h4><b>Nama : </b>{{$komentar->nama}}</h4>
						<p>{{$komentar->created_at}}</p>
						<p><b>Komentar : </b>{!! nl2br($komentar->komentar) !!}</p>
						
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection