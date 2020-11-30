@extends('admin.base')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Artikel
						<a href="{{url('admin/artikel')}}" class="btn btn-dark float-right"><i class="fas fa-arrow-left"></i>  Kembali</a>

					</div>
					<div class="card-body">
						<h4><b>Judul : {{$artikel->judul}}</b></h4>
						<p>Artikel dibuat : {{$artikel->created_at}}  |  Diedit : {{$artikel->updated_at}}</p>
						<img src="{{url('public')}}/img/{{$artikel->gambar}}" style="width: 70%;" align="center"><br><br><br>
						<p>{!! nl2br($artikel->artikel) !!}</p>
					</div>
				</div>
			</div>
		</div>
	</div>


@endsection