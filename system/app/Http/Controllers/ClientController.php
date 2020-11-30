<?php 

namespace App\Http\Controllers;
use App\Models\Artikel;
use App\Models\Komentar;

class ClientController extends Controller{
	function index(){
		$data['list_komentar'] =  Komentar::all();
		$data['list_artikel'] =  Artikel::all();
		return view('client.index', $data);
	}
	function store(){
		$komentar = new Komentar;
		$komentar->nama = request('nama');
		$komentar->komentar = request('komentar');
		$komentar->save();


		$artikel = new Artikel;
		$artikel->id_user = request()->user()->id;
		$artikel->judul = request('judul');
		$aikel->gambar = request('gambar');
		$artikel->sumber = request('sumber');
		$artikel->artikel = request('artikel');
		$artikel->save();

		return redirect('admin/komentar')->with('success', 'Data Berhasil Ditambahkan');
	}

	function show(artikel $artikel){
		$data['artikel'] = $artikel;
		return view('client.show', $data); 
	}


	
}
 ?>