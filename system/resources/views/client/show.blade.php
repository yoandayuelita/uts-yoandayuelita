@extends('client.base')
@section('content')
	<h4><b>Judul : {{$artikel->judul}}</b></h4>
						<p>Artikel dibuat : {{$artikel->created_at}}  |  Diedit : {{$artikel->updated_at}}</p>
						<img src="{{url('public')}}/img/{{$artikel->gambar}}" style="width: 70%;" align="center"><br><br><br>
@endsection