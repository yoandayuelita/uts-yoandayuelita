<?php 

namespace App\Http\Controllers;
use App\Models\Artikel;
 
class ArtikelController extends Controller{
	function index(){
		$user = request()->user();
		$data['list_artikel'] =  $user->artikel;
		return view('artikel.index', $data);
	}
	function create(){
		return view('artikel.create');
	}
	function store(){
		$artikel = new Artikel;
		$artikel->id_user = request()->user()->id;
		$artikel->judul = request('judul');
		$artikel->gambar = request('gambar');
		$artikel->sumber = request('sumber');
		$artikel->artikel = request('artikel');
		$artikel->save();

		return redirect('admin/artikel')->with('success', 'Data Berhasil Ditambahkan');

	}
	function show(artikel $artikel){
		$data['artikel'] = $artikel;
		return view('artikel.show', $data); 
	}
	function edit(artikel $artikel){
		$data['artikel'] = $artikel;
		return view('artikel.edit', $data); 
	}
	function update(artikel $artikel){
		$artikel->judul = request('judul');
		$artikel->gambar = request('gambar');
		$artikel->sumber = request('sumber');
		$artikel->artikel = request('artikel');
		$artikel->save();

		return redirect('admin/artikel')->with('warning', 'Data Berhasil Diubah');
	}
	function destroy(artikel $artikel){
		$artikel->delete();

		return redirect('admin/artikel')->with('danger', 'Data Berhasil Dihapus');
	}
}
 ?>