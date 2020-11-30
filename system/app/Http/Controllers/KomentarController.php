<?php 

namespace App\Http\Controllers;
use App\Models\Komentar;

class KomentarController extends Controller{
	function index(){
		$user = request()->user();
		$data['list_komentar'] =  $user->komentar;
		return view('komentar.index', $data);
	}
	function create(){
		return view('komentar.create');
	}
	function store(){
		$komentar = new Komentar;
		$komentar->id_user = request()->user()->id;
		$komentar->nama = request('nama');
		$komentar->komentar = request('komentar');
		$komentar->save();

		return redirect('client')->with('success', 'Data Berhasil Ditambahkan');

	}
	function show(komentar $komentar){
		$data['komentar'] = $komentar;
		return view('komentar.show', $data); 
	}
	function edit(komentar $komentar){
		$data['komentar'] = $komentar;
		return view('komentar.edit', $data); 
	}
	function update(komentar $komentar){
		$komentar->nama = request('nama');
		$komentar->komentar = request('komentar');
		$komentar->save();

		return redirect('admin/komentar')->with('warning', 'Data Berhasil Diubah');
	}
	function destroy(komentar $komentar){
		$komentar->delete();

		return redirect('admin/komentar')->with('danger', 'Data Berhasil Dihapus');
	}
}
 ?>